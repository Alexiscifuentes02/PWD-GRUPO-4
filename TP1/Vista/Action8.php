<?php
$tituloPagina = "TP 1 - Ejercicio 8";
include_once("Estructura/Encabezado.php");

if ($_POST) {
    $nombre = $_POST['nombre_form'];
    $apellido = $_POST['apellido_form'];
    $dni = $_POST['dni_form'];
    $edad = $_POST['edad_form'];
    $estudiante = $_POST['estudiante_form'];

    $resultado = 0;

    if ($estudiante == "si" && $edad < 12) {
        $resultado = 160;
    } elseif ($estudiante == "si" && $edad >= 12) {
        $resultado = 180;
    } else {
        $resultado = 300;
    }
    ?>

<main class="container my-5 py-5 d-flex justify-content-center">
    <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
        <h2 class="mb-3 text-center">Resultado</h2>
        <h4 class="text-center">Hola: <?= $nombre . " " . $apellido ?> !!!</h4>
        <h4 class="text-center">Precio de la Entrada: $<?= $resultado ?></h4>
        <div class="d-flex justify-content-center">
            <a href="Ejercicio8.php" class="btn btn-primary mt-3">Volver</a>
        </div>
    </div>
</main>


    <?php
} else {
    ?>
    <main class="container my-4">
        <div class="alert alert-danger">
            No se recibieron todos los datos!!!
        </div>
        <a href="Ejercicio8.php" class="btn btn-primary">Volver</a>
    </main>
    <?php
}

include_once("Estructura/Pie.php");
?>
