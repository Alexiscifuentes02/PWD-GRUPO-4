<?php
    $tituloPagina = "TP 1 - Ejercicio 5";
    include_once("Estructura/Encabezado.php");
?>
    <form id="Ejercicio5" method="get" action="Action5.php">
        <b>Nombre: </b><input type="text" name="nombre_form" id="nombre_form" placeholder="Nombre"><br><br>
        <b>Apellido: </b><input type="text" name="apellido_form" id="apellido_form" placeholder="Apellido"><br><br>
        <b>Edad: </b><input type="number" name="edad_form" id="edad_form"><br><br>
        <b>Direccion:</b><input type="text" name="direccion_form" id="direccion_form" placeholder="Direccion"><br><br>
        <b>Nivel de Estudio:</b><br>
        <input type="checkbox" name="estudios[]" value="No tiene Estudios" checked>-No tengo Estudios<br>
        <input type="checkbox" name="estudios[]" value="Estudios Primarios">-Estudios Primarios<br>
        <input type="checkbox" name="estudios[]" value="Estudios Secundarios">-Estudios Secundarios<br><br>

        <b>Selecciones su Sexo:</b>
        <input type="radio" name="sexo_form" value="Masculino" checked>Masculino 
        <input type="radio" name="sexo_form" value="Femenino">Femenino<br><br>

        <input type="submit" value="Enviar">
    </form>
<?php include_once("Estructura/Pie.php"); ?>
