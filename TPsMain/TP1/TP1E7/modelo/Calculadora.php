<?php

class Calculadora {
    
    /**
     * Realiza el cálculo según la operación seleccionada
     * @param string $operacion La operación a realizar
     * @param float $num1 Primer operando
     * @param float $num2 Segundo operando
     * @return float El resultado de la operación
     * @throws Exception Si la operación no es válida o hay error matemático
     */
    public static function calcular($operacion, $num1, $num2) {
        switch ($operacion) {
            case 'suma':
                return self::suma($num1, $num2);
            case 'resta':
                return self::resta($num1, $num2);
            case 'multiplicacion':
                return self::multiplicacion($num1, $num2);
            case 'division':
                return self::division($num1, $num2);
            case 'potencia':
                return self::potencia($num1, $num2);
            case 'radicacion':
                return self::radicacion($num1, $num2);
            case 'modulo':
                return self::modulo($num1, $num2);
            default:
                throw new Exception('Operación no válida.');
        }
    }
    
    /**
     * Obtiene el símbolo de la operación para mostrar
     * @param string $operacion La operación
     * @return string El símbolo de la operación
     */
    public static function obtenerSimbolo($operacion) {
        switch ($operacion) {
            case 'suma':
                return '+';
            case 'resta':
                return '-';
            case 'multiplicacion':
                return '×';
            case 'division':
                return '÷';
            case 'potencia':
                return '^';
            case 'radicacion':
                return '√';
            case 'modulo':
                return '%';
            default:
                return '?';
        }
    }
    
    /**
     * Obtiene el nombre completo de la operación
     * @param string $operacion La operación
     * @return string El nombre de la operación
     */
    public static function obtenerNombre($operacion) {
        switch ($operacion) {
            case 'suma':
                return 'Suma';
            case 'resta':
                return 'Resta';
            case 'multiplicacion':
                return 'Multiplicación';
            case 'division':
                return 'División';
            case 'potencia':
                return 'Potencia';
            case 'radicacion':
                return 'Radicación';
            case 'modulo':
                return 'Módulo';
            default:
                return 'Operación desconocida';
        }
    }
    
    private static function suma($a, $b) {
        return $a + $b;
    }
    
    private static function resta($a, $b) {
        return $a - $b;
    }
    
    private static function multiplicacion($a, $b) {
        return $a * $b;
    }
    
    private static function division($a, $b) {
        if ($b == 0) {
            throw new Exception('Error: División por cero.');
        }
        return $a / $b;
    }
    
    private static function potencia($a, $b) {
        return pow($a, $b);
    }
    
    private static function radicacion($a, $b) {
        // La radicación: a es el radicando, b es el índice
        if ($a < 0 && $b % 2 == 0) {
            throw new Exception('Error: No se puede calcular la raíz par de un número negativo.');
        }
        if ($b == 0) {
            throw new Exception('Error: Índice cero no válido.');
        }
        return pow($a, 1/$b);
    }
    
    private static function modulo($a, $b) {
        if ($b == 0) {
            throw new Exception('Error: Módulo por cero.');
        }
        return $a % $b;
    }
}

?>