<!DOCTYPE html>
<?php
    $tituloPagina = "TP 2 - Ejercicio 1";
    include_once("../Estructura/Encabezado.php");
?>
  <div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card shadow p-4 w-100" style="max-width: 700px;">
      <h2 class="text-center mb-4">Formulario con Validación Bootstrap</h2>

      <form method="post" action="Action1.php" class="row g-3 needs-validation" novalidate>

        <div class="col-md-6">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" required>
          <div class="invalid-feedback">Debe ingresar un nombre.</div>
        </div>

        <div class="col-md-6">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido" required>
          <div class="invalid-feedback">Debe ingresar un apellido.</div>
        </div>

        <div class="col-md-6">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" name="email" id="email" required>
          <div class="invalid-feedback">Debe ingresar un correo válido.</div>
        </div>

        <div class="col-md-6">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" minlength="6" class="form-control" name="password" id="password" required>
          <div class="invalid-feedback">La contraseña debe tener al menos 6 caracteres.</div>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="terminos" id="terminos" required>
            <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
            <div class="invalid-feedback">Debe aceptar los términos antes de enviar.</div>
          </div>
        </div>

        <div class="col-12 text-center">
          <button class="btn btn-success" type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </div>
  <?php include_once("../Estructura/Pie.php"); ?>

