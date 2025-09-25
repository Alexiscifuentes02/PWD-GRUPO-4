<?php 
    class AbmPersona{
        //


        /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    * @param array $param
    * @return Persona
    */
    private function cargarObjeto($param){
        $objPersona = null;
        if(array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
            $objPersona = new Persona();
            $objPersona->setear($param['NroDni'],$param['Apellido'],$param['Nombre'],$param['fechaNac'],$param['Telefono'],$param['Domicilio']);
        }
        return $objPersona;
    }


    /**
    * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    * @param array $param
    * @return Persona
    */
    private function cargarObjetoConClave($param){
        $objPersona = null;
        if(isset($param['NroDni'])){
            $objPersona = new Persona();
            $objPersona->setear($param['NroDni'],null,null,null,null,null);
        }
        return $objPersona;
    }


    /**
    * Corrobora que dentro del arreglo asociativo están seteados los campos claves
    * @param array $param
    * @return boolean
    */
    private function seteadosCamposClaves($param){
        $resp = false;
        if(isset($param['NroDni'])){
            $resp = true;
        }
        return $resp;
    }


    /**
    * Permite ingresar un objeto a la BD
    * @param array $param
    * @return boolean
    */
    public function alta($param){
        $resp = false;
        $objPersona = $this->cargarObjeto($param);
        //verEstructura($objPersona);
        if($objPersona != null and $objPersona->insertar()){
            $resp = true;
        }
        return $resp;
    }


    /**
    * Permite eliminar un objeto de la BD
    * @param array $param
    * @return boolean
    */
    public function baja($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjetoConClave($param);
            if($objPersona != null and $objPersona->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }


    /**
    * Permite modificar un objeto de la BD
    * @param array $param
    * @return boolean
    */
    public function modificacion($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjeto($param);
            if($objPersona != null and $objPersona->modificar()){
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
            if (isset($param['NroDni'])) {
                $where .= " and NroDni =" . $param['NroDni'];
            }
            if (isset($param['Apellido'])) {
                $where .= " and Apellido ='" . $param['Apellido'] . "'";
            }
            if (isset($param['Nombre'])) {
                $where .= " and Nombre ='" . $param['Nombre'] . "'";
            }
            if (isset($param['fechaNac'])) {
                $where .= " and fechaNac ='" . $param['fechaNac'] . "'";
            }
            if (isset($param['Telefono'])) {
                $where .= " and Telefono ='" . $param['Telefono'] . "'";
            }
            if (isset($param['Direccion'])) {
                $where .= " and Direccion ='" . $param['Direccion'] . "'";
            }
        }
        $objPersona = new Persona();
        $arreglo = $objPersona->listar($where);  
        return $arreglo;
    }

    /**
    * Obtiene todas las Personas de la BD
    * @return array
    */
    public function obtenerPersonas(){
        $objPersona = new Persona();
        $col = $objPersona->listar("");
        return $col;
    }

    /**
    * Obtiene una Persona buscada por su documento
    * @param array $param
    * @return Persona
    */
    public function obtenerPersona($param){
        $objPersona = $this->cargarObjetoConClave($param);
        $res = $this->buscarPersona($objPersona);
        if(!$res){
            $objPersona = null;
        }
        return $objPersona;
    }

    /**
    * Busca si una Persona se encuentra en la BD
    * @param array $param
    * @return boolean
    */
    public function buscarPersona($objPersona){
        $res = false;
        if(isset($objPersona)){
            $res = $objPersona->cargar();
        }
        return $res;
    }

    public function arregloInfoAuto($param){
        $objPersona = $this->obtenerPersona($param);
        $infoAuto = null;

        if(isset($objPersona)){
            $infoAuto['NroDni'] = $objPersona->getNroDni();
            $infoAuto['Apellido'] = $objPersona->getApellido();
            $infoAuto['Nombre'] = $objPersona->getNombre();
            $infoAuto['fechaNac'] = $objPersona->getFechaNac();
            $infoAuto['Telefono'] = $objPersona->getTelefono();
            $infoAuto['Direccion'] = $objPersona->getDomicilio();
        }
        return $infoAuto;
    }
}