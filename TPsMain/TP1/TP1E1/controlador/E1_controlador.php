<?php
require_once '../modelo/vernumero.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $numero = $_POST['formulario1CampoNumerico'];

    if (!is_numeric($numero)) {
        $resultado = "Error: Por favor, ingrese un valor numérico.";
        include '../vista/E1_resultado.php';
    } else {
        $resultado = VerNumero::comprobarSigno($numero);

        include '../vista/E1_resultado.php';
    }
} else {
    
    include '../vista/E1_formulario.php';
}
?>