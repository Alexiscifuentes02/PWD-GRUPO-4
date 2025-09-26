<?php
session_start();

// Obtener datos de GET o POST
$nombre = $_POST['nombre'] ?? $_GET['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? $_GET['apellido'] ?? null;
$edad = $_POST['edad'] ?? $_GET['edad'] ?? null;
$direccion = $_POST['direccion'] ?? $_GET['direccion'] ?? null;
$sexo = $_POST['sexo'] ?? $_GET['sexo'] ?? null;
$estudios = $_POST['estudios'] ?? $_GET['estudios'] ?? ["No tiene Estudios"];

// Si $estudios es un array, convertir a cadena
if (is_array($estudios)) {
    $estudios = implode(", ", $estudios);
}

// Guardar en sesión
$_SESSION['datos'] = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'edad' => $edad,
    'direccion' => $direccion,
    'sexo' => $sexo,
    'estudios' => $estudios
];

// Redirigir a la vista Action5.php
header("Location: ../../vista/TP1/Action5.php");
exit;
