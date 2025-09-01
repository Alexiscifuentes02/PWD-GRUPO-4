<?php
// Inicializar variables
$numero1 = $numero2 = $operacion = '';
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['botonCalcular'])) {
    // Recoger y sanitizar los datos
    $numero1 = trim($_GET['numero1'] ?? '');
    $numero2 = trim($_GET['numero2'] ?? '');
    $operacion = trim($_GET['operacion'] ?? '');

    // Validar
    if ($numero1 === '') {
        $errores['numero1'] = 'El número 1 es obligatorio.';
    } elseif (!is_numeric($numero1)) {
        $errores['numero1'] = 'El número 1 debe ser un valor numérico.';
    }

    if ($numero2 === '') {
        $errores['numero2'] = 'El número 2 es obligatorio.';
    } elseif (!is_numeric($numero2)) {
        $errores['numero2'] = 'El número 2 debe ser un valor numérico.';
    }

    if (empty($operacion)) {
        $errores['operacion'] = 'La operación es obligatoria.';
    }

    // Si no hay errores, procesar
    if (empty($errores)) {
        require_once '../modelo/Calculadora.php';
        
        // Convertir a números
        $num1 = (float)$numero1;
        $num2 = (float)$numero2;

        try {
            // Realizar la operación
            $resultado = Calculadora::calcular($operacion, $num1, $num2);
            
            // Obtener el símbolo de la operación
            $simbolo = Calculadora::obtenerSimbolo($operacion);
            
            // Mostrar el resultado
            include '../vista/E7_resultado.php';
        } catch (Exception $e) {
            $errores['operacion'] = $e->getMessage();
            include '../vista/E7_formulario.php';
        }
    } else {
        include '../vista/E7_formulario.php';
    }
} else {
    include '../vista/E7_formulario.php';
}
?>