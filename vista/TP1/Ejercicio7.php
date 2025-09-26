<?php
$tituloPagina = "TP 1 - Ejercicio 7";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg p-4">
                <!-- Enviar al controlador -->
                <form id="Ejercicio7" method="post" action="../../Controlador/TP1/Ejercicio7Controller.php">
                    <div class="mb-3">
                        <label for="numero1" class="form-label">Ingrese el primer número:</label>
                        <input type="number" class="form-control" id="numero1" name="numero1">
                    </div>
                    <div class="mb-3">
                        <label for="numero2" class="form-label">Ingrese el segundo número:</label>
                        <input type="number" class="form-control" id="numero2" name="numero2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Seleccione la operación:</b></label>
                        <select name="operacion" class="form-select">
                            <option value="SUMA">SUMA</option>
                            <option value="RESTA">RESTA</option>
                            <option value="MULTIPLICACION">MULTIPLICACIÓN</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
