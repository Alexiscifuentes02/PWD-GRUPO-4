<?php
    $tituloPagina = "TP 1 - Ejercicio 3";
    include_once("Estructura/Encabezado.php");
?>
    <h1>DATOS</h1>
    <form id="Ejercicio3" method="post" action="Action3.php">
        Nombre: <input type="text" name="nombre_form_form" id="nombre_form"><br><br>
        Apellido: <input type="text" name="apellido_form" id="apellido_form"><br><br>
        Edad: <input type="number" name="edad_form" id="edad_form"><br><br>
        Direccion: <input type="text" name="direccion_form" id="direccion_form"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <?php include_once("Estructura/Pie.php"); ?>
