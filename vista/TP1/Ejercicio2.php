<?php
$tituloPagina = "TP 1 - Ejercicio 2";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Horas Por Día</h2>
        <form method="post" action="../../Controlador/TP1/Ejercicio2Controller.php">
          <?php
          $dias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
          foreach ($dias as $dia) {
              $label = ucfirst($dia);
              echo <<<HTML
              <div class="mb-3">
                <label for="$dia" class="form-label">$label</label>
                <input type="number" class="form-control" id="$dia" name="$dia">
              </div>
HTML;
          }
          ?>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Calcular Total</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>

