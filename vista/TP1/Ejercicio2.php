<?php
    $tituloPagina = "TP 1 - Ejercicio 2";
    include_once("../Estructura/Encabezado.php");
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Horas Por Día</h2>
        <form method="get" action="Action2.php">
          <div class="mb-3">
            <label for="lunes" class="form-label">Lunes</label>
            <input type="number" class="form-control" id="lunes" name="lunes">
          </div>
          <div class="mb-3">
            <label for="martes" class="form-label">Martes</label>
            <input type="number" class="form-control" id="martes" name="martes">
          </div>
          <div class="mb-3">
            <label for="miercoles" class="form-label">Miércoles</label>
            <input type="number" class="form-control" id="miercoles" name="miercoles">
          </div>
          <div class="mb-3">
            <label for="jueves" class="form-label">Jueves</label>
            <input type="number" class="form-control" id="jueves" name="jueves">
          </div>
          <div class="mb-3">
            <label for="viernes" class="form-label">Viernes</label>
            <input type="number" class="form-control" id="viernes" name="viernes">
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Calcular Total</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <?php include_once("../Estructura/Pie.php"); ?>
