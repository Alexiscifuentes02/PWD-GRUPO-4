<?php
    $tituloPagina = "TP 1 - Ejercicio 8";
    include_once("../Estructura/Encabezado.php");
?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg p-4">
    <main>
    <form id="Ejercicio8" method="post" action="Action8.php">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre_form" class="form-control" required>
        </div>

        <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido_form" class="form-control" required>
        </div>

        <div class="mb-3">
        <label for="documento" class="form-label">Documento:</label>
        <input type="text" name="dni_form" class="form-control" minlength="8" maxlength="8" required>
        </div>

        <div class="mb-3">
        <label for="edad" class="form-label">Edad:</label>
        <input type="text" name="edad_form" class="form-control" minlength="1" maxlength="3" required>
        </div>

        <div class="mb-3">
        <label for="estudios" class="form-label">Estudia Actualmente?</label><br>
        <div class="mb-3">
            <input type="radio" name="estudiante_form" value="si"> Sí
            <input type="radio" name="estudiante_form" value="no"> No
        </div>
        </div>


        <div class="d-flex justify-content-center gap-3 form-buttons">
            <input type="submit" value="Enviar" class="btn btn-primary">
            <input type="reset" value="Limpiar" class="btn btn-secondary">
        </div>
    </form>
    </main>
    </div>
            </div>
        </div>
    </div>
    <?php include_once("../Estructura/Pie.php"); ?>