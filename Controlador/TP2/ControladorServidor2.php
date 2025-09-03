<?php
require_once("../../Modelo/TP2/CalcularHoras.php");

// Armar el array de horarios desde el formulario
$horas = [];
for ($i = 1; $i <= 5; $i++) {
    $horas[] = [
        'inicio' => $_POST["formularioHoras$i"] ?? '',
        'fin'    => $_POST["formularioHorasFin$i"] ?? ''
    ];
}

// Validar
$errores = CalcularHoras::validarHoras($horas);

if (!empty($errores)) {
    // Si hay errores, los mostramos directamente
    include("../../Vista/TP2/ResultadoHoras.php");
    exit;
}

// Calcular total de horas
$total = CalcularHoras::calcularTotalHoras($horas);

// Pasar resultado a la vista
include("../../Vista/TP2/Action2.php");
