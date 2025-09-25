<?php 
    class AbmAuto{
      //


    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    * @param array $param
    * @return Auto
    */
    private function cargarObjeto($param){
        $obj = null;  
        if( array_key_exists('Patente',$param) and array_key_exists('Marca',$param) and array_key_exists('Modelo',$param) and array_key_exists('DniDuenio',$param)){
            $objAuto = new Auto();
            $objPersona = new Persona();
            $objPersona->setNroDni($param['DniDuenio']);
            $objPersona->cargar();
            $objAuto->setear($param['Patente'], $param['Marca'], $param['Modelo'],$objPersona);
        }
        return $objAuto;
    }  


    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * @param array $param
    * @return Tabla
    */
    private function cargarObjetoConClave($param){
        $objAuto = null;
        if(isset($param['Patente'])){
            $objAuto = new Auto();
            $objAuto->setPatente($param['Patente']);
        }
        return $objAuto;
    }


    /**
    * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
    * @param array $param
    * @return boolean
    */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente'])){
            $resp = true;
        }
        return $resp;
    }


    /**
    * Permite ingresar un objeto a la Base de Datos
    * @param array $param
    * @return boolean
    */
    public function alta($param){
        $resp = false;
        $objAuto = $this->cargarObjeto($param);
        // verEstructura($elObjtTabla);
        if ($objAuto!=null and $objAuto->insertar()){
            $resp = true;
        }
        return $resp;   
    }


    /**
    * Permite eliminar un objeto de la Base de Datos 
    * @param array $param
    * @return boolean
    */
    public function baja($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjetoConClave($param);
            if ($objAuto!=null and $objAuto->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }


    /**
    * permite modificar un objeto
    * @param array $param
    * @return boolean
    */
    public function modificacion($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjeto($param);
            if($objAuto != null and $objAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }


    /**
     * Permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        if ($param <> null) {
            if (isset($param['Patente'])) {
                $where .= " and Patente = '" . $param['Patente'] . "'";
            }
            if (isset($param['Marca'])) {
                $where .= " and Marca = '" . $param['Marca'] . "'";
            }
            if (isset($param['Modelo'])) {
                $where .= " and Modelo = '" . $param['Modelo'] . "'";
            }
            if (isset($param['DniDuenio'])) {
                $where .= " and DniDuenio = '" . $param['DniDuenio'] . "'";
            }
        }
        $objAuto = new Auto();
        $arreglo = $objAuto->listar($where);  
        return $arreglo; 
    }


     /**
    * Obtiene todos los autos de la BD
    * @return array
    */
    public function obtenerAutos(){
        $objAuto = new Auto();
        $colAutos = $objAuto->listar("");
        return $colAutos;
    }

    /**
    * Obtiene un Auto buscado por su patente
    * @param array $param
    * @return Auto
    */
    public function obtenerAuto($param){
        $objAuto = $this->cargarObjetoConClave($param);
        $res = $this->buscarAuto($objAuto);
        if(!$res){
            $objAuto = null;
        }
        return $objAuto;
    }

    /**
    * Busca si un Auto se encuentra en la BD
    * @param array $param
    * @return boolean
    */
    public function buscarAuto($objAuto){
        $res = false;
        if(isset($objAuto)){
            $res = $objAuto->cargar();
        }
        return $res;
    }


    /**
    * Busca si un Auto le pertenece a una Persona
    * @param array $param
    * @return boolean
    */
    public function autoPertenece($auto,$dni){
        $res = false;
        if($auto->getObjPersona()->getNroDni() == $dni){
            $res = true;
        }
        return $res;
    }

    /**
    * Obtiene los Autos que posee una Persona
    * @param int
    * @return array
    */        
    public function obtenerAutosPersona($dni){
        $colAutos = $this->obtenerAutos();
        $autosPersona = null;
            
        foreach($colAutos as $objAuto){
            if($this->autoPertenece($objAuto,$dni)){
                $autosPersona[] = $objAuto;
            }
        }
        return $autosPersona;
    }
}