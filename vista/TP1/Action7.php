<?php
$tituloPagina = "TP 1 - Ejercicio 7";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
include_once("../../Configuracion.php");

$datosFormulario = data_submitted();
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h1>
                        Resultado de la <?= htmlspecialchars($datosFormulario['operacion'] ?? '') ?>
                        de <?= htmlspecialchars($datosFormulario['numero1'] ?? '') ?>
                        y <?= htmlspecialchars($datosFormulario['numero2'] ?? '') ?>
                        = <?= htmlspecialchars($datosFormulario['resultado'] ?? '') ?>
                    </h1>
                    <a href="Ejercicio7.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
