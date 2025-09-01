<?php

class CalculadoraPrecio {
    
    /**
     * Calcula el precio de la entrada según la edad y condición de estudiante
     * @param int $edad La edad de la persona
     * @param bool $esEstudiante Si es estudiante o no
     * @return int El precio de la entrada
     */
    public static function calcularPrecio($edad, $esEstudiante) {
        if ($esEstudiante || $edad < 12) {
            return 160;
        } elseif ($esEstudiante && $edad >= 12) {
            return 180;
        } else {
            return 300;
        }
    }
    
    /**
     * Obtiene una descripción del tipo de entrada
     * @param int $edad La edad de la persona
     * @param bool $esEstudiante Si es estudiante o no
     * @return string La descripción del tipo de entrada
     */
    public static function obtenerTipoEntrada($edad, $esEstudiante) {
        if ($esEstudiante && $edad >= 12) {
            return "Estudiante (mayor de 12 años)";
        } elseif ($esEstudiante) {
            return "Estudiante (menor de 12 años)";
        } elseif ($edad < 12) {
            return "Menor de 12 años";
        } else {
            return "Adulto";
        }
    }
}

?>