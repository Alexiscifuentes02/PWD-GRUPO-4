<?php
$tituloPagina = "TP 1 - Ejercicio4";
include_once("Estructura/Encabezado.php");
        if(!empty($_GET['nombre_form']) && 
            !empty($_GET['apellido_form']) && 
            !empty($_GET['edad_form']) && 
            !empty($_GET['direccion_form'])){

            if($edad >= 18){
                echo "<h1>HOLA YO SOY ".strtoupper($nombre)."&nbsp;".strtoupper($apellido).",TENGO ".strtoupper($edad). " AÑOS Y SOY MAYOR DE EDAD<br></h1>";
            }else{
                echo "<h1>HOLA YO SOY ".strtoupper($nombre)."&nbsp;".strtoupper($apellido).",TENGO ".strtoupper($edad). " AÑOS Y SOY MENOR DE EDAD<br></h1>";
            } 
        }else{
            echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
        }
    ?>
    <a href="Ejercicio4.php">Volver</a>
    <?php
    include_once("Estructura/Pie.php");
    ?>

    