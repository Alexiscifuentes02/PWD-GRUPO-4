<?php
$tituloPagina = "TP 2 - Ejercicio 1 - Resultado";
include_once("Estructura/Encabezado.php");
require_once "../Controller/ControladorServidor.php";

$resultado = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controlador = new ControladorServidor();
    $resultado = $controlador->validarFormulario($_POST);
}
?>

<main class="flex-fill container mt-4">
    <?php if ($resultado && $resultado["estado"] === "error") { ?>
        <div class="alert alert-danger">
            <h4>Se encontraron errores:</h4>
            <ul>
                <?php foreach ($resultado["errores"] as $error) {
                    echo "<li>$error</li>";
                } ?>
            </ul>
        </div>
    <?php } elseif ($resultado && $resultado["estado"] === "ok") { ?>
        <div class="alert alert-success">
            <h3 class="alert-heading">Registro exitoso</h3>
            <p><strong>Nombre:</strong> <?= ($_POST["nombre"]) ?></p>
            <p><strong>Apellido:</strong> <?= ($_POST["apellido"]) ?></p>
            <p><strong>Email:</strong> <?= ($_POST["email"]) ?></p>
        </div>
    <?php } ?>
    <a href="Formulario.php" class="btn btn-primary mt-3">⬅ Volver</a>
</main>

<?php include_once("Estructura/Pie.php"); ?>
