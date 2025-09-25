<?php
    class Persona{
        private $nroDni;
        private $apellido;
        private $nombre;
        private $fechaNac;
        private $telefono;
        private $domicilio;
        private $mensajeOperacion;

        // Metodo Constructor de la Clase Persona
        public function __construct(){
            $this->nroDni = "";
            $this->apellido = "";
            $this->nombre = "";
            $this->fechaNac = "";
            $this->telefono = "";
            $this->domicilio = "";
            $this->mensajeOperacion = "";
        }

        // Metodo para setear
        public function setear($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
            $this->setNroDni($nroDni);
            $this->setApellido($apellido);
            $this->setNombre($nombre);
            $this->setFechaNac($fechaNac);
            $this->setTelefono($telefono);
            $this->setDomicilio($domicilio);
        }


        // Metodos GET de la Clase Persona
        public function getNroDni(){
            return $this->nroDni;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getFechaNac(){
            return $this->fechaNac;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getDomicilio(){
            return $this->domicilio;
        }
        
        public function getMensajeOperacion(){
            return $this->mensajeOperacion;
        }


        // Metodos SET de la Clase Persona
        public function setNroDni($nroDniNuevo){
            $this->nroDni = $nroDniNuevo;
        }
        
        public function setApellido($apellidoNuevo){
            $this->apellido = $apellidoNuevo;
        }

        public function setNombre($nombreNuevo){
            $this->nombre = $nombreNuevo;
        }

        public function setFechaNac($fechaNacNuevo){
            $this->fechaNac = $fechaNacNuevo;
        }

        public function setTelefono($telefonoNuevo){
            $this->telefono = $telefonoNuevo;
        }

        public function setDomicilio($domicilioNuevo){
            $this->domicilio = $domicilioNuevo;
        }

        public function setMensajeOperacion($mensajeOperacionNuevo){
            $this->mensajeOperacion = $mensajeOperacionNuevo;
        }


        // Funcion Cargar
        public function cargar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
            if($base->Iniciar()){
                $res = $base->Ejecutar($sql);
                if($res > -1){
                    if($res > 0){
                        $row = $base->Registro();
                        $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        $resp = true;
                    }
                }
            }else{
                $this->setMensajeOperacion("Persona->listar: " . $base->getError());
            }
            return $resp;
        }


        // Funcion Insertar
        public function insertar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
                    VALUES ('".$this->getNroDni()."','".$this->getApellido()."','".$this->getNombre().
                    "','".$this->getFechaNac()."','".$this->getTelefono()."','".$this->getDomicilio()."')";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setmensajeOperacion("Persona->insertar: " . $base->getError());
                }
            }else{
                $this->setmensajeOperacion("Persona->insertar: " . $base->getError());
            }
            return $resp;
        }

        
        // Funcion Modificar (¡¡¡¡REVISAR!!!!)
        public function modificar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "UPDATE persona SET Apellido = '".$this->getApellido()."', Nombre = '".$this->getNombre().
                    "', fechaNac = '".$this->getFechaNac()."', Telefono = '".$this->getTelefono().
                    "', Domicilio = '".$this->getDomicilio()."' WHERE NroDni = '".$this->getNroDni()."'";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
                }
            }else{
                $this->setMensajeOperacion("Persona->modificar: " . $base->getError());
            }
            return $resp;
        }


        // Funcion Eliminar
        public function eliminar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
                }
            }else{
                $this->setMensajeOperacion("Persona->eliminar: " . $base->getError());
            }
            return $resp;
        }


        // Funcion Listar
        public function listar($parametro = ""){
            $arreglo = array();
            $base = new BaseDatos();
            $sql = "SELECT * FROM persona";
            if($parametro != "") {
                $sql .= 'WHERE ' . $parametro;
            }
            $res = $base->Ejecutar($sql);
            if($res > -1){
                if($res > 0){
                    while($row = $base->Registro()){
                        $objPersona = new Persona();
                        $objPersona->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        array_push($arreglo,$objPersona);
                    }
                }
            }else{
                $this->setMensajeOperacion("Persona->listar: " . $base->getError());
            }
            return $arreglo;
        }
    }
?>