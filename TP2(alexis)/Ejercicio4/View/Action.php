<?php
$tituloPagina = "TP 2 - Ejercicio 4";
include_once("Estructura/Encabezado.php");
require_once "../Controller/ControladorServidor.php";

$resultado = null;
$datos = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controlador = new ControladorFormulario();
    $resultado = $controlador->validarFormulario($_POST);

    if ($resultado["estado"] === "ok") {
        $datos = [
            "titulo"       => ($_POST['titulo'] ?? ''),
            "actores"      => ($_POST['actores'] ?? ''),
            "director"     => ($_POST['director'] ?? ''),
            "guion"        => ($_POST['guion'] ?? ''),
            "produccion"   => ($_POST['produccion'] ?? ''),
            "anio"         => ($_POST['anio'] ?? ''),
            "nacionalidad" => ($_POST['nacionalidad'] ?? ''),
            "genero"       => ($_POST['genero'] ?? ''),
            "duracion"     => ($_POST['duracion'] ?? ''),
            "restriccion"  => ($_POST['restriccion'] ?? ''),
            "sinopsis"     => ($_POST['sinopsis'] ?? ''),
        ];
    }
}
?>
<div class="container mt-4">

    <?php if ($resultado && $resultado["estado"] === "error"){ ?>
        <div class="alert alert-danger">
            <h4>Se encontraron errores:</h4>
            <ul>
                <?php foreach ($resultado["errores"] as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    <?php } elseif ($resultado && $resultado["estado"] === "ok") { ?>
        <div class="alert alert-success">
            <h3 class="alert-heading">Datos de la película ingresada</h3>
            <?php foreach ($datos as $campo => $valor): ?>
                <p><strong><?= ucfirst($campo) ?>:</strong> <?= $valor ?></p>
            <?php endforeach; ?>
        </div>
    <?php } ?>

    <a href="Cinema.php" class="btn btn-primary mt-3">⬅ Volver</a>
</div>

<?php include_once("Estructura/Pie.php"); ?>
