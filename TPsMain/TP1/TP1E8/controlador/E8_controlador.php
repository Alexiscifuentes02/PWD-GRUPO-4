<?php
// Inicializar variables
$edad = '';
$estudiante = false;
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['botonCalcular'])) {
    // Recoger y sanitizar los datos
    $edad = trim($_GET['edad'] ?? '');
    $estudiante = isset($_GET['estudiante']) ? (bool)$_GET['estudiante'] : false;

    // Validar
    if ($edad === '') {
        $errores['edad'] = 'La edad es obligatoria.';
    } elseif (!is_numeric($edad) || $edad < 0 || $edad > 120) {
        $errores['edad'] = 'La edad debe ser un número válido entre 0 y 120.';
    }

    // Si no hay errores, procesar
    if (empty($errores)) {
        require_once '../modelo/CalculadoraPrecio.php';
        
        // Convertir a número
        $edadNum = (int)$edad;

        // Calcular el precio
        $precio = CalculadoraPrecio::calcularPrecio($edadNum, $estudiante);
        
        // Mostrar el resultado
        include '../vista/E8_resultado.php';
    } else {
        include '../vista/E8_formulario.php';
    }
} else {
    include '../vista/E8_formulario.php';
}
?>