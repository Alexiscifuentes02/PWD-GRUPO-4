<?php
$tituloPagina = "TP 1 - Ejercicio 8";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg p-4">
                <form id="Ejercicio8" method="post" action="../../Controlador/TP1/Ejercicio8Controller.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" name="nombre_form" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" name="apellido_form" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Documento:</label>
                        <input type="text" name="dni_form" class="form-control" minlength="8" maxlength="8" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad:</label>
                        <input type="number" name="edad_form" class="form-control" min="1" max="120" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">¿Estudia Actualmente?</label><br>
                        <input type="radio" name="estudiante_form" value="si" required> Sí
                        <input type="radio" name="estudiante_form" value="no"> No
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                        <input type="reset" value="Limpiar" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
