<?php
$tituloPagina = "TP 2 - Ejercicio 3";
include_once("../Estructura/Encabezado.php");
include_once("../../Configuracion.php");
require_once "../../Controlador/TP2/ControladorServidor3.php";

$login = new ControladorLogin();
$datosFormulario = data_submitted();
$resultado = $login->darResultado($datosFormulario);
$mensaje = $resultado["mensaje"];
$clase = $resultado["clase"];

?>

<main style="min-height: 80vh; padding: 150px 0;">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow p-4 text-center">
        <?php if($mensaje): ?>
          <div class="alert alert-<?= $clase ?> fs-2 mb-4">
            <?= $mensaje ?>
          </div>
        <?php endif; ?>
        <a href="Ejercicio3.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>
<?php include_once("../Estructura/Pie.php"); ?>
