<?php
$tituloPagina = "TP 3 - Ejercicio 1";
include_once("../Estructura/Encabezado.php");
include_once("../../Configuracion.php");
require_once "../../Controlador/TP3/ControladorServidor1.php";

$datos = data_submitted();

$controlador = new ControladorServidor1();
$mensaje = $controlador->validarArchivo($_FILES["archivo"]);
$nombreArchivo = $_FILES["archivo"]["name"]
?>

<div class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow p-4 text-center" style="width: 400px;">
        <h4 class="mb-3">Resultado</h4>

        <p class="fw-bold fs-1 text-center
            <?php echo ($mensaje === "EXITO") ? 'text-success' : 'text-danger'; ?>">
            <?php echo $mensaje; ?>
        </p>

        <a href="Ejercicio1.php" class="btn btn-primary mt-3">Volver</a>
        <?php if ($mensaje === "EXITO"): ?>
            <a href="Uploads/<?php echo $nombreArchivo; ?>" class="btn btn-secondary mt-3" target="_blank">
                Ver Archivo
            </a>
        <?php endif; ?>
    </div>
</div>

<?php include_once("../Estructura/Pie.php"); ?>
