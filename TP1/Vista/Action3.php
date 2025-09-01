<?php
$tituloPagina = "TP 1 - Ejercicio3";
include_once("Estructura/Encabezado.php");
        if(!empty($_POST['nombre_form']) && 
            !empty($_POST['apellido_form']) && 
            !empty($_POST['edad_form']) && 
            !empty($_POST['direccion_form'])){
        
            $nombre = $_POST['nombre_form'];
            $apellido = $_POST['apellido_form'];
            $edad = $_POST['edad_form'];
            $direccion = $_POST['direccion_form'];

            echo "<h1>HOLA YO SOY ".strtoupper($nombre)."&nbsp;".strtoupper($apellido).",TENGO ".strtoupper($edad). " AÑOS Y VIVO EN ".strtoupper($direccion)."<br></h1>";
        }else{
            echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
        }
    ?>
    <a href="Ejercicio3.php">Volver</a>
    <?php
    include_once("Estructura/Pie.php");
    ?>
