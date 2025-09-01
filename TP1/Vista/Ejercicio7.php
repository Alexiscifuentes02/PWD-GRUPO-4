<?php
    $tituloPagina = "TP 1 - Ejercicio 7";
    include_once("Estructura/Encabezado.php");
?>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg p-4">
                    <form id="Ejercicio7" method="post" action="Action7.php">
                        <div class="mb-3">
                        <label for="numero1" class="form-label">Ingrese el primer numero:</label>
                        <input type="number" class="form-control" id="numero1" name="numero1">
                        </div>
                        <div class="mb-3">
                            <label for="numero2" class="form-label">Ingrese el segundo numero</label>
                            <input type="number" class="form-control" id="numero2" name="numero2">
                        </div>
                        <div class="mb-3">
                            <b>Seleccione la operacion:</b>
                            <select name="operacion">
                                <option value="SUMA">SUMA</option>
                                <option value="RESTA">RESTA</option>
                                <option value="MULTIPLICACION">MULTIPLICACION</option>
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
    <?php include_once("Estructura/Pie.php"); ?>
