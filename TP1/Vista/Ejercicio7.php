<?php
    $tituloPagina = "TP 1 - Ejercicio 7";
    include_once("Estructura/Encabezado.php");
?>
    <form id="Ejercicio7" method="post" action="Action7.php">
        <b>Ingrese el primer numero:&nbsp;&nbsp; <input type="number" name="numero1"></b><br>
        <b>Ingrese el segundo numero: <input type="number" name="numero2"></b><br><br>

        <b>Seleccione la operacion:</b>
        <select name="operacion">
            <option value="SUMA">SUMA</option>
            <option value="RESTA">RESTA</option>
            <option value="MULTIPLICACION">MULTIPLICACION</option>
        </select><br><br>

        <input type="submit" value="Calcular" class="btn btn-primary"><br>
    </form>
    <?php include_once("Estructura/Pie.php"); ?>
