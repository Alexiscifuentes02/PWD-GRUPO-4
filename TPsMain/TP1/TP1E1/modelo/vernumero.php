<?php
class VerNumero {
    public static function comprobarSigno($numero) {
        // Your logic here
        if ($numero > 0) {
            return "El número es positivo.";
        } elseif ($numero < 0) {
            return "El número es negativo.";
        } else {
            return "El número es cero.";
        }
    }
}
?>