<?php
// Controlador simple que recibe datos por GET o POST,
// los empaqueta y los envía como querystring a la vista Action6.php

// Tomar datos desde GET o POST (acepta ambos)
$nombre    = $_REQUEST['nombre']    ?? '';
$apellido  = $_REQUEST['apellido']  ?? '';
$edad      = $_REQUEST['edad']      ?? '';
$direccion = $_REQUEST['direccion'] ?? '';
$sexo      = $_REQUEST['sexo']      ?? '';
$estudios  = $_REQUEST['estudios']  ?? [];
$deportes  = $_REQUEST['deportes']  ?? [];

// Convertir arrays a cadenas
$estudios = is_array($estudios) ? implode(', ', $estudios) : $estudios;
$deportes = is_array($deportes) ? implode(', ', $deportes) : $deportes;

// Construir querystring para pasar datos a la vista
$query = http_build_query([
    'nombre'    => $nombre,
    'apellido'  => $apellido,
    'edad'      => $edad,
    'direccion' => $direccion,
    'sexo'      => $sexo,
    'estudios'  => $estudios,
    'deportes'  => $deportes
]);

// Redirigir a la vista final
header("Location: /PWD-GRUPO-4/vista/TP1/Action6.php?$query");
exit;
