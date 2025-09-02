<?php
// Controlador para el cálculo de horas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['botonDeEnvio1'])) {
    
    // Incluir el modelo
    require_once '../../Modelo/TP2/calcularHoras.php';
    
    // Recoger los datos del formulario
    $horas = [];
    for ($i = 1; $i <= 5; $i++) {
        $inicio = $_POST['formularioHoras' . $i] ?? '';
        $fin = $_POST['formularioHorasFin' . $i] ?? '';
        $horas[] = ['inicio' => $inicio, 'fin' => $fin];
    }
    
    // Validar los datos
    $errores = CalcularHoras::validarHoras($horas);
    
    if (!empty($errores)) {
        // Si hay errores, mostrar el formulario con los errores
        include '../../Vista/TP2/Ejercicio2.php';
    } else {
        // Calcular el total de horas
        $total = CalcularHoras::calcularTotalHoras($horas);
        
        // Mostrar el resultado
        include '../../Vista/TP2/Ejercicio2.php';
    }
} else {
    // Mostrar el formulario si no se envió por POST
    include '../../Vista/TP2/Ejercicio2.php';
}
?>