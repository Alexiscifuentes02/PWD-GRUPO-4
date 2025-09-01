<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['botonDeEnvio1'])) {
    
    require_once '../modelo/concatenarInformacion.php';
    
    $nombre = trim($_POST['formularioCampoNombre'] ?? '');
    $apellido = trim($_POST['formularioCampoApellido'] ?? '');
    $edad = trim($_POST['formularioCampoEdad'] ?? '');
    $direccion = trim($_POST['formularioCampoDireccion'] ?? '');
    
    $errores = [];
    
    if (empty($nombre)) {
        $errores["nombre"] = "El nombre es obligatorio.";
    }
    
    if (empty($apellido)) {
        $errores["apellido"] = "El apellido es obligatorio.";
    }
    
    if (empty($edad)) {
        $errores["edad"] = "La edad es obligatoria.";
    } elseif (!is_numeric($edad) || $edad < 0 || $edad > 150) {
        $errores["edad"] = "La edad debe ser un número válido entre 0 y 150.";
    }
    
    if (empty($direccion)) {
        $errores["direccion"] = "La dirección es obligatoria.";
    }
    
    if (!empty($errores)) {
        include '../vista/E3_formulario.php';
    } else {

        $mensaje = ConcatenarInformacion::generarMensaje($nombre, $apellido, $edad, $direccion);
        
        include '../vista/E3_resultado.php';
    }
}elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['botonDeEnvio2'])) {
    
    require_once '../modelo/concatenarInformacion.php';
    
    $nombre = trim($_GET['formulario2CampoNombre'] ?? '');
    $apellido = trim($_GET['formulario2CampoApellido'] ?? '');
    $edad = trim($_GET['formulario2CampoEdad'] ?? '');
    $direccion = trim($_GET['formulario2CampoDireccion'] ?? '');
    
    $errores2 = [];
    
    if (empty($nombre)) {
        $errores2["nombre"] = "El nombre es obligatorio.";
    }
    
    if (empty($apellido)) {
        $errores2["apellido"] = "El apellido es obligatorio.";
    }
    
    if (empty($edad)) {
        $errores2["edad"] = "La edad es obligatoria.";
    } elseif (!is_numeric($edad) || $edad < 0 || $edad > 150) {
        $errores2["edad"] = "La edad debe ser un número válido entre 0 y 150.";
    }
    
    if (empty($direccion)) {
        $errores2["direccion"] = "La dirección es obligatoria.";
    }
    
    if (!empty($errores2)) {
        include '../vista/E3_formulario.php';
    } else {      
        $mensaje = ConcatenarInformacion::generarMensaje($nombre, $apellido, $edad, $direccion);
        include '../vista/E3_resultado.php';
    }
} else {
    include '../vista/E3_formulario.php';
}
?>