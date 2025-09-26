<?php
$tituloPagina = "TP 1 - Ejercicio 6";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h2>Datos:</h2>
                    <h3>
                        Nombre: <?= htmlspecialchars($_GET['nombre'] ?? '') ?><br>
                        Apellido: <?= htmlspecialchars($_GET['apellido'] ?? '') ?><br>
                        Edad: <?= htmlspecialchars($_GET['edad'] ?? '') ?><br>
                        Dirección: <?= htmlspecialchars($_GET['direccion'] ?? '') ?><br>
                        Estudios: <?= htmlspecialchars($_GET['estudios'] ?? '') ?><br>
                        Sexo: <?= htmlspecialchars($_GET['sexo'] ?? '') ?><br>
                        Deportes: <?= htmlspecialchars($_GET['deportes'] ?? '') ?><br>
                    </h3>
                    <a href="Ejercicio6.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>

