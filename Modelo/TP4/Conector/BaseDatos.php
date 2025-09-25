<?php
class BaseDatos extends PDO {
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    private $debug;
    private $error;
    private $sql;
    private $indice;
    private $conec;
    private $resultado;
        
    // Metodo Constructor de la Clase Auto
    public function __construct() {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'infoautos';
        $this->user = 'root';
        $this->pass = '';
        $this->debug = true;
        $this->error = "";
        $this->sql = "";
        $this->indice = 0;
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;

        try {
            parent::__construct($dns, $this->user, $this->pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $this->conec = true;
        } catch (PDOException $error) {
            $this->sql = $error->getMessage();
            $this->conec = false;
            if($this->debug) echo "<pre>ERROR CONEXIÓN: ".$this->sql."</pre>";
        }
    }

    //Metodos GET de la clase BD
    public function getDebug(){
        return $this->debug;
    }
    public function getError(){
        return "\n".$this->error;
    }
    public function getSQL(){
        return "\n".$this->sql;
    }
    private function getIndice(){
        return $this->indice;
    }
    public function getConec(){
        return $this->conec;
    }
    private function getResultado(){
        return $this->resultado;
    }

    //Metodos SET de la clase BD
    public function setDebug($debug){
        $this->debug = $debug;
    }
    public function setError($error){
        $this->error = $error;
    }
    public function setSQL($sql) {
        return "\n".$this->sql = $sql;
    }
    private function setIndice($indice) {
        $this->indice = $indice;
    }
    private function setResultado($resultado) {
        $this->resultado = $resultado;
    }

    /**
    * Inicia la conexión con el Servidor y la Base de Datos Mysql.
    * Retorna true si la conexión con el servidor se pudo establecer y false en caso contrario.
    * @return boolean
    */
    public function Iniciar() {
        return $this->getConec();
    }

    /**
    * Ejecuta un INSERT, UPDATE, DELATE o SELECT; segun la consulta sql pasada por parámetro.
    * @return boolean
    */
    public function Ejecutar($sql) {
        $this->setError("");
        $this->setSQL($sql);

        //se desea INSERT? 
        if(stristr($sql,"INSERT")){
            $resp = $this->EjecutarInsert($sql);
        }
        //se desea UPDATE o DELETE? 
        if(stristr($sql,"UPDATE") OR stristr($sql,"DELETE")){
            $resp = $this->EjecutarDeleteUpdate($sql);
        }
        //se desea ejecutar un SELECT?
        if(stristr($sql,"SELECT")){
            $resp = $this->EjecutarSelect($sql);
        }
        return $resp;
    }

    /**
    *Si se inserta en una tabla que tiene una columna autoincrement se retorna el id con el que 
    *se inserto el registro caso contrario se retorna -1
    */
    private function EjecutarInsert($sql){
        $resultado = parent::query($sql);
        if(!$resultado){
            $this->analizarDebug();
            $id = 0;
        }else{
            $id =  $this->lastInsertId(); 
            if($id == 0){
                $id = -1;
            }
        }
        return $id;
    }

    /**
    * Devuelve la cantidad de filas afectadas por la ejecución SQL. Si el valor es < 0 no se pudo
    * realizar la operación
    * @return integer
    */
    private function EjecutarDeleteUpdate($sql){
        $cantFilas = -1;
        $resultado = parent::query($sql);
        if(!$resultado){
            $this->analizarDebug();
        }else{
            $cantFilas = $resultado->rowCount();
        }
        return $cantFilas;
    }
    
    /**
    * Retorna cada uno de los registros de una consulta select
    * @return integer
    */
    private function EjecutarSelect($sql) {
        $cant = -1;
        $resultado = parent::query($sql);
        if(!$resultado){
            $this->analizarDebug();
        }else{
            $arregloResult = $resultado->fetchAll();
            $cant = count($arregloResult);
            $this->setIndice(0);
            $this->setResultado($arregloResult);
        }
        return $cant;
    }

    /**
    * Devuelve un registro retornado por la ejecución de una consulta
    * el puntero se desplaza al siguiente registro de la consulta
    * @return array
    */
    public function Registro() {
        $filaActual = false;
        $indiceActual = $this->getIndice();
        if($indiceActual >= 0){
            $filas = $this->getResultado();
            if($indiceActual<count($filas)) {
                $filaActual = $filas[$indiceActual];
                $indiceActual++;
                $this->setIndice($indiceActual);
            }else{
                $this->setIndice(-1);
            }
        }
        return $filaActual;
    }

    /**
    * Esta función si esta seteado la variable instancia $this->debug visualiza el debug
    */
    private function analizarDebug(){
        $error = $this->errorInfo();
        $this->setError($error);
        if($this->getDebug()){
            echo "<pre>";
            print_r($error);
            echo "</pre>";
        }
    }
}
?>