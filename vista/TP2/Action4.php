<?php
$tituloPagina = "TP 2 - Ejercicio 4";
include_once("../Estructura/Encabezado.php");
include_once("../../Configuracion.php");
require_once "../../Controlador/TP2/ControladorServidor4.php";

$resultado = null;
$datos = [];

$datosFormulario = data_submitted();

if (!empty($datosFormulario)) {
    $controlador = new ControladorFormulario();
    $resultado = $controlador->validarFormulario($datosFormulario);

    if ($resultado["estado"] === "ok") {
        $datos = [
            "titulo"       => ($datosFormulario['titulo'] ?? ''),
            "actores"      => ($datosFormulario['actores'] ?? ''),
            "director"     => ($datosFormulario['director'] ?? ''),
            "guion"        => ($datosFormulario['guion'] ?? ''),
            "produccion"   => ($datosFormulario['produccion'] ?? ''),
            "anio"         => ($datosFormulario['anio'] ?? ''),
            "nacionalidad" => ($datosFormulario['nacionalidad'] ?? ''),
            "genero"       => ($datosFormulario['genero'] ?? ''),
            "duracion"     => ($datosFormulario['duracion'] ?? ''),
            "restriccion"  => ($datosFormulario['restriccion'] ?? ''),
            "sinopsis"     => ($datosFormulario['sinopsis'] ?? ''),
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

    <a href="Ejercicio4.php" class="btn btn-primary mt-3">⬅ Volver</a>
</div>

<?php include_once("../Estructura/Pie.php"); ?>
