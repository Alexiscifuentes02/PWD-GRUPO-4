<?php
    $tituloPagina = "TP 1 - Ejercicio 2";
    include_once("Estructura/Encabezado.php");
?>
    <h1> Horas Por Dia </h1>
    <form id="ejercicio2" method="get" action="Action2.php">
        Lunes: 
        <input type="number" name="lunes_hora" id="lunes" min="0" max="23"><br><br>
        Martes: 
        <input type="number" name="martes_hora" id="martes" min="0" max="23"><br><br> 
        Miercoles: 
        <input type="number" name="miercoles_hora" id="miercoles" min="0" max="23"><br><br>
        Jueves: 
        <input type="number" name="jueves_hora" id="jueves" min="0" max="23"><br><br>
        Viernes: 
        <input type="number" name="viernes_hora" id="viernes" min="0" max="23"><br><br>

        <input type="submit" value="Calcular Total">
    </form>
    <?php include_once("Estructura/Pie.php"); ?>
