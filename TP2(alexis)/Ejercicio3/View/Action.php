<?php
$tituloPagina = "TP 2 - Ejercicio 3";
include_once("Estructura/Encabezado.php");
require_once "../Controller/ControladorServidor.php";

$login = new ControladorLogin();

$mensaje = "";
$clase   = "";

if ($_POST) {
    $esValido = $login->validarLogin($_POST);

    if ($esValido) {
        $mensaje = "Login correcto, ¡Bienvenido!";
        $clase   = "success";
    } else {
        $mensaje = "Usuario o clave incorrectos";
        $clase   = "danger"; 
    }
}
?>

<main style="min-height: 80vh; padding: 150px 0;">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow p-4 text-center">
        <div class="alert alert-<?= $clase ?> fs-2 mb-4">
          <?= $mensaje ?>
        </div>
        <a href="Login.php" class="btn btn-primary">Volver</a>
      </div>
    </div>
  </div>
</main>

<style>
html, body {
  height: 100%;
  margin: 0;
}
body {
  display: flex;
  flex-direction: column;
}
main {
  flex: 1; 
}
</style>



<?php include_once("Estructura/Pie.php"); ?>
