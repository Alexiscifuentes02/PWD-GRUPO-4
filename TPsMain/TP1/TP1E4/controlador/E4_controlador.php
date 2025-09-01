<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['botonDeEnvio1'])) {
    
    require_once '../modelo/concatenarInformacion.php';
    
    $nombre = trim($_GET['formularioCampoNombre'] ?? '');
    $apellido = trim($_GET['formularioCampoApellido'] ?? '');
    $edad = trim($_GET['formularioCampoEdad'] ?? '');
    $direccion = trim($_GET['formularioCampoDireccion'] ?? '');
    
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
        include '../vista/E4_formulario.php';
    } else {
            $mensaje = ConcatenarInformacion::generarMensaje($nombre, $apellido, $edad, $direccion);
            include '../vista/E4_resultado.php';
    }
} else {
    include '../vista/E4_formulario.php';
}
?>