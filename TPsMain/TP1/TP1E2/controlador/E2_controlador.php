<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['botonDeEnvio1'])) {
    
    require_once '../modelo/calcularHoras.php';
    
    $horas = [];
    for ($i = 1; $i <= 5; $i++) {
        $inicio = $_GET['formularioHoras' . $i] ?? '';
        $fin = $_GET['formularioHorasFin' . $i] ?? '';
        $horas[] = ['inicio' => $inicio, 'fin' => $fin];
    }

    $errores = CalcularHoras::validarHoras($horas);
    
    if (!empty($errores)) {
        include '../vista/E2_formulario.php';
    } else {
        $total = CalcularHoras::calcularTotalHoras($horas);
        include '../vista/E2_resultado.php';
    }
} else {
    include '../vista/E2_formulario.php';
}
?>