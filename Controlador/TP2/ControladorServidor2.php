<?php
require_once("../../Modelo/TP2/CalcularHoras.php");
include_once("../../Configuracion.php");

$datosFormulario = data_submitted();

// Armar el array de horarios desde el formulario
$horas = [];
for ($i = 1; $i <= 5; $i++) {
    $horas[] = [
        'inicio' => $datosFormulario["formularioHoras$i"] ?? '',
        'fin'    => $datosFormulario["formularioHorasFin$i"] ?? ''
    ];
}

// Validar
$errores = CalcularHoras::validarHoras($horas);

if (!empty($errores)) {
    // Si hay errores, los mostramos directamente
    include("../../Vista/TP2/Action2.php");
    exit;
}

// Calcular total de horas
$total = CalcularHoras::calcularTotalHoras($horas);

// Pasar resultado a la vista
include("../../Vista/TP2/Action2.php");
