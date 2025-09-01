<?php
    $tituloPagina = "TP 1 - Ejercicio 8";
    include_once("Estructura/Encabezado.php");
?>
    <main>
    <form id="Ejercicio8" method="post" action="Action8.php">
        <label>Nombre:</label>
        <input type="text" name="nombre_form" required>

        <label>Apellido</label>
        <input type="text" name="apellido_form" required>

        <label>Documento:</label>
        <input type="text" name="dni_form" minlength="8" maxlength="8" required>

        <label>Edad:</label>
        <input type="text" name="edad_form" minlength="1" maxlength="3" required>

        <label>Estudia Actualmente?</label><br>
        <div class="mb-3">
            <input type="radio" name="estudiante_form" value="si"> Sí
            <input type="radio" name="estudiante_form" value="no"> No
        </div>

        <div class="d-flex justify-content-center gap-3 form-buttons">
            <input type="submit" value="Enviar" class="btn btn-primary">
            <input type="reset" value="Limpiar" class="btn btn-primary">
        </div>
    </form>
    </main>
    <?php include_once("Estructura/Pie.php"); ?>