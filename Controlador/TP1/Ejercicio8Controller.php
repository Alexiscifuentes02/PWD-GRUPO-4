<?php
// Controlador Ejercicio 8: recibe datos, calcula precio y redirige a la vista Action8.php

// Recibir datos tanto por POST como GET
$nombre     = $_REQUEST['nombre_form']    ?? '';
$apellido   = $_REQUEST['apellido_form']  ?? '';
$dni        = $_REQUEST['dni_form']       ?? '';
$edad       = $_REQUEST['edad_form']      ?? '';
$estudiante = $_REQUEST['estudiante_form'] ?? '';

$precio = '';
if ($nombre && $apellido && $dni && $edad && $estudiante) {
    if ($estudiante === "si" && $edad < 12) {
        $precio = 160;
    } elseif ($estudiante === "si" && $edad >= 12) {
        $precio = 180;
    } else {
        $precio = 300;
    }
}

// Pasar todo a la vista por query string
$query = http_build_query([
    'nombre'     => $nombre,
    'apellido'   => $apellido,
    'dni'        => $dni,
    'edad'       => $edad,
    'estudiante' => $estudiante,
    'precio'     => $precio
]);

header("Location: ../../vista/TP1/Action8.php?$query");
exit;
