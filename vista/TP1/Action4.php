<?php
session_start();
$tituloPagina = "TP 1 - Ejercicio 4";

// Recuperar mensaje de la sesión
$mensaje = $_SESSION['mensaje'] ?? "NO HAY DATOS";
$recibidos = $_SESSION['recibidos'] ?? false;

// Limpiar sesión
unset($_SESSION['mensaje'], $_SESSION['recibidos']);

include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h1 class="<?= $recibidos ? '' : 'text-danger' ?>"><?= $mensaje ?></h1>
                    <a href="Ejercicio4.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>

    