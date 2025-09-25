<?php 
    $tituloPagina = "TP 4 - Ejercicio 6 (NuevaPersona.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");
?>
<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3 align="center">Ingreso Nueva Persona</h3>
        <form method="post" action="AccionNuevaPersona.php" class="needs-validation" novalidate>
          <div class="form-group">
              <label><b>DNI:</b></label>
              <input id="NroDni" name="NroDni" class="form-control" type="text" required pattern="[0-9]{8}" title="Ingrese 8 dígitos">
          </div><br>

          <div class="form-group">
              <label><b>Apellido:</b></label>
              <input id="Apellido" name="Apellido" class="form-control" type="text" required title="Ingrese su apellido">
          </div><br>

          <div class="form-group">
              <label><b>Nombre:</b></label>
              <input id="Nombre" name="Nombre" class="form-control" type="text" required title="Ingrese su nombre">
          </div><br>

          <div class="form-group">
              <label><b>Fecha de Nacimiento:</b></label>
              <input id="fechaNac" name="fechaNac" class="form-control" type="date" required>
          </div><br>

          <div class="form-group">
              <label><b>Telefono:</b></label>
              <input id="Telefono" name="Telefono" class="form-control" type="text" pattern="[0-9]{5,}" title="Ingrese al menos 5 dígitos">
          </div><br>

          <div class="form-group">
              <label><b>Domicilio:</b></label>
              <input id="Domicilio" name="Domicilio" class="form-control" type="text" required title="Ingrese su domicilio">
          </div><br>

          <input id="accion" name="accion" value="nuevo" type="hidden">
          <input type="submit" class="btn btn-success">
        </form>
        <script src="../JS/FuncionesJava.js"></script>
      </div>
    </div>
<?php include_once("../Estructura/Pie.php"); ?>


