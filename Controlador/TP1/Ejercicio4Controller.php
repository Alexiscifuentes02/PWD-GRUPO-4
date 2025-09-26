<?php
session_start();

// Obtener datos de GET o POST
$nombre = $_POST['nombre'] ?? $_GET['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? $_GET['apellido'] ?? null;
$edad = $_POST['edad'] ?? $_GET['edad'] ?? null;
$direccion = $_POST['direccion'] ?? $_GET['direccion'] ?? null;

// Validar que se recibieron todos los datos
if ($nombre && $apellido && $edad && $direccion) {
    $mayor = ((int)$edad >= 18) ? "SOY MAYOR DE EDAD" : "SOY MENOR DE EDAD";
    $mensaje = "HOLA YO SOY " . strtoupper($nombre) . " " . strtoupper($apellido) .
               ", TENGO " . strtoupper($edad) . " AÑOS Y $mayor";
    $recibidos = true;
} else {
    $mensaje = "NO SE RECIBIERON TODOS LOS DATOS!!!";
    $recibidos = false;
}

// Guardar en sesión para que la vista lo muestre
$_SESSION['mensaje'] = $mensaje;
$_SESSION['recibidos'] = $recibidos;

// Redirigir a la vista
header("Location: ../../vista/TP1/Action4.php");
exit;
