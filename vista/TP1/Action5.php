<?php
session_start();
$tituloPagina = "TP 1 - Ejercicio 5";

// Recuperar datos de la sesión
$datos = $_SESSION['datos'] ?? [];

// Limpiar sesión
unset($_SESSION['datos']);

include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <h2>Datos:</h2>
                    <h3>
                        Nombre: <?= htmlspecialchars($datos['nombre'] ?? '') ?><br>
                        Apellido: <?= htmlspecialchars($datos['apellido'] ?? '') ?><br>
                        Edad: <?= htmlspecialchars($datos['edad'] ?? '') ?><br>
                        Dirección: <?= htmlspecialchars($datos['direccion'] ?? '') ?><br>
                        Estudios: <?= htmlspecialchars($datos['estudios'] ?? '') ?><br>
                        Sexo: <?= htmlspecialchars($datos['sexo'] ?? '') ?><br>
                    </h3>
                    <a href="Ejercicio5.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
