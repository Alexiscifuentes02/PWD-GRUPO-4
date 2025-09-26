<?php
$tituloPagina = "TP 1 - Ejercicio 7";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h1>
                        Resultado de la <?= htmlspecialchars($_GET['operacion'] ?? '') ?>
                        de <?= htmlspecialchars($_GET['numero1'] ?? '') ?>
                        y <?= htmlspecialchars($_GET['numero2'] ?? '') ?>
                        = <?= htmlspecialchars($_GET['resultado'] ?? '') ?>
                    </h1>
                    <a href="Ejercicio7.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
