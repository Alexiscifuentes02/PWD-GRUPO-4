<?php
$tituloPagina = "TP 1 - Ejercicio 8";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="container my-5 py-5 d-flex justify-content-center">
    <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
        <?php if (!empty($_GET['precio'])): ?>
            <h2 class="mb-3 text-center">Resultado</h2>
            <h4 class="text-center">
                Hola: <?= htmlspecialchars($_GET['nombre']) . " " . htmlspecialchars($_GET['apellido']) ?> !!!
            </h4>
            <h4 class="text-center">Precio de la Entrada: $<?= htmlspecialchars($_GET['precio']) ?></h4>
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
