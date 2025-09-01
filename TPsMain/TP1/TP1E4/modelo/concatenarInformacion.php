<?php

class ConcatenarInformacion {
    public static function generarMensaje($nombre, $apellido, $edad, $direccion) {
        if($edad>=18){
        return "Hola, yo soy $nombre $apellido, tengo $edad años, y vivo en $direccion";
        } else{
        return "Hola, yo soy $nombre $apellido, tengo $edad años, soy menor de edad, y vivo en $direccion";
        }
        
    }
}
?>