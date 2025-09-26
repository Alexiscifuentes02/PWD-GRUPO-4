<?php
session_start();
$tituloPagina = "TP 1 - Ejercicio 1";

// Recuperar datos de la sesión
$mensaje = $_SESSION['mensaje'] ?? "⚠ NO HAY DATOS";
$clase = $_SESSION['clase'] ?? "text-danger";

// Limpiar sesión para no mostrar el mensaje nuevamente si se recarga
unset($_SESSION['mensaje'], $_SESSION['clase']);

include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h2 class="<?= $clase ?> mb-4"><?= $mensaje ?></h2>
                    <a href="Ejercicio1.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
