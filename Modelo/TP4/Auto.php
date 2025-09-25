<?php
    class Auto{
        private $patente;
        private $marca;
        private $modelo;
        private $objPersona;
        private $mensajeOperacion;

        // Metodo Constructor de la Clase Auto
        public function __construct(){
            $this->patente = "";
            $this->marca = "";
            $this->modelo = "";
            $this->objPersona = new Persona;
            $this->mensajeOperacion = "";
        }

        // Metodo para setear
        public function setear($patente, $marca, $modelo, $objPersona){
            $this->setPatente($patente);
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setObjPersona($objPersona);
        }

        // Metodos GET de la Clase Auto
        public function getPatente(){
            return $this->patente;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function getObjPersona(){
            return $this->objPersona;
        }

        public function getMensajeOperacion(){
            return $this->mensajeOperacion;
        }


        // Metodos SET de la Clase Auto
        public function setPatente($nuevaPatente){
            $this->patente = $nuevaPatente;
        }

        public function setMarca($nuevaMarca){
            $this->marca = $nuevaMarca;
        }

        public function setModelo($nuevoModelo){
            $this->modelo = $nuevoModelo;
        }

        public function setObjPersona($nuevoObjetoPersona){
            $this->objPersona = $nuevoObjetoPersona;
        }

        public function setMensajeOperacion($nuevoMensajeOperacion){
            $this->mensajeOperacion = $nuevoMensajeOperacion;
        }


        // Funcion cargar
        public function cargar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "SELECT * FROM auto WHERE Patente = '" .$this->getPatente(). "'";
            if($base->Iniciar()){
                $res = $base->Ejecutar($sql);
                if($res > -1){
                    if($res > 0){
                        $row = $base->Registro();
                        $objPersona = new Persona();
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar();
                        $this->setear($row['Patente'],$row['Marca'],$row['Modelo'],$objPersona);
                        $resp = true;
                    }
                }
            }else{
                $this->setmensajeoperacion("Auto->listar: " . $base->getError());
            }
            return $resp;
        }

        //Funcion Insertar
        public function insertar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "INSERT INTO auto (Patente,Marca,Modelo,DniDuenio) 
                    VALUES ('".$this->getPatente()."','".$this->getMarca()."',".$this->getModelo().
                    ",'".$this->getObjPersona()->getNroDni()."')";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
                }
            }else{
                $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
            }
            return $resp;
        }

        // Funcion Modificar
        public function modificar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "UPDATE auto SET Marca = '".$this->getMarca()."', Modelo = ".$this->getModelo().
                                ", DniDuenio = '".$this->getObjPersona()->getNroDni()."' WHERE Patente = '".$this->getPatente()."'";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
                }
            }else{
                $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
            }
            return $resp;
        }

        // Funcion Eliminar
        public function eliminar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM auto WHERE Patente = '" . $this->getPatente() . "'";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
                }
            }else{
                $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
            }
            return $resp;
        }

        // Funcion Listar
        public function listar($parametro = ""){
            $arreglo = array();
            $base = new BaseDatos();
            $sql = "SELECT * FROM auto";
            if($parametro != ""){
                $sql.='WHERE '.$parametro;
            }
            $res = $base->Ejecutar($sql);
            if($res > -1){
                if($res > 0){
                    while($row = $base->Registro()){
                        $objAuto = new Auto();
                        $objPersona = new Persona();
                        $objPersona->setNroDni($row['DniDuenio']);
                        $objPersona->cargar();
                        $objAuto->setear($row['Patente'],$row['Marca'], $row['Modelo'], $objPersona);
                        array_push($arreglo,$objAuto);
                    }
                }
            }else{
                $this->setmensajeoperacion("Auto->listar: " . $base->getError());
            }

            return $arreglo;
        }
    }
?>