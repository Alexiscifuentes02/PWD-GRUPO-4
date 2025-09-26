<?php
$tituloPagina = "TP 1 - Ejercicio 8";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
include_once("../../Configuracion.php");

$datosFormulario = data_submitted();
?>
<main class="container my-5 py-5 d-flex justify-content-center">
    <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
        <?php if (!empty($datosFormulario['precio'])): ?>
            <h2 class="mb-3 text-center">Resultado</h2>
            <h4 class="text-center">
                Hola: <?= htmlspecialchars($datosFormulario['nombre']) . " " . htmlspecialchars($datosFormulario['apellido']) ?> !!!
            </h4>
            <h4 class="text-center">Precio de la Entrada: $<?= htmlspecialchars($datosFormulario['precio']) ?></h4>
        <?php else: ?>
            <div class="alert alert-danger text-center">
                No se recibieron todos los datos!!!
            </div>
        <?php endif; ?>
        <div class="d-flex justify-content-center">
            <a href="Ejercicio8.php" class="btn btn-primary mt-3">Volver</a>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
