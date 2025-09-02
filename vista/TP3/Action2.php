<?php
$tituloPagina = "TP 3 - Ejercicio 2";
include_once("../Estructura/Encabezado.php");
require_once "../../Controlador/TP3/ControladorServidor2.php";

$controlador = new ControladorServidor2();
$mensaje = $controlador->validarArchivo($_FILES["archivo"]);
?>
<div class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow p-4" style="width: 500px;">
        <h4 class="text-center mb-3">Resultado</h4>
        <p class="fw-bold fs-1 text-center
            <?php echo ($mensaje === "EXITO") ? 'text-success' : 'text-danger'; ?>">
            <?php echo $mensaje; ?>
        </p>
        <a href="Ejercicio2.php" class="btn btn-primary mt-3">Volver</a>
        <?php if ($mensaje === "EXITO"): ?>
            <a href="Uploads/<?php echo basename($_FILES['archivo']['name']); ?>" 
               class="btn btn-secondary mt-3" target="_blank">Ver Archivo</a>
        <?php endif; ?>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>
