<?php
$tituloPagina = "TP 1 - Ejercicio 6";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg p-4">
                <!-- Enviamos al controlador -->
                <form id="Ejercicio6" method="get" action="../../Controlador/TP1/Ejercicio6Controller.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <div class="mb-3">
                        <b>Estudios:</b><br>
                        <input type="radio" name="estudios[]" value="No tiene Estudios" checked> No tiene Estudios<br>
                        <input type="radio" name="estudios[]" value="Estudios Primarios"> Estudios Primarios<br>
                        <input type="radio" name="estudios[]" value="Estudios Secundarios"> Estudios Secundarios<br>
                    </div>
                    <div class="mb-3">
                        <b>Sexo:</b><br>
                        <input type="radio" name="sexo" value="Masculino" checked> Masculino
                        <input type="radio" name="sexo" value="Femenino"> Femenino<br>
                    </div>
                    <div class="mb-3">
                        <b>Deportes:</b><br>
                        <input type="checkbox" name="deportes[]" value="Ninguno" checked> Ninguno<br>
                        <input type="checkbox" name="deportes[]" value="Futbol"> Futbol<br>
                        <input type="checkbox" name="deportes[]" value="Basquet"> Basquet<br>
                        <input type="checkbox" name="deportes[]" value="Tennis"> Tennis<br>
                        <input type="checkbox" name="deportes[]" value="Voley"> Voley<br>
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
