<?php
$tituloPagina = "TP 1 - Ejercicio 6";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
include_once("../../Configuracion.php");

$datosFormulario = data_submitted();
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h2>Datos:</h2>
                    <h3>
                        Nombre: <?= htmlspecialchars($datosFormulario['nombre'] ?? '') ?><br>
                        Apellido: <?= htmlspecialchars($datosFormulario['apellido'] ?? '') ?><br>
                        Edad: <?= htmlspecialchars($datosFormulario['edad'] ?? '') ?><br>
                        Dirección: <?= htmlspecialchars($datosFormulario['direccion'] ?? '') ?><br>
                        Estudios: <?= htmlspecialchars($datosFormulario['estudios'] ?? '') ?><br>
                        Sexo: <?= htmlspecialchars($datosFormulario['sexo'] ?? '') ?><br>
                        Deportes: <?= htmlspecialchars($datosFormulario['deportes'] ?? '') ?><br>
                    </h3>
                    <a href="Ejercicio6.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>

