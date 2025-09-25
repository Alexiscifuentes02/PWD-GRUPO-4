<?php 
    $tituloPagina = "TP 4 - Ejercicio 7 (NuevoAuto.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <h3 align="center">Ingreso Nuevo Auto</h3>
        <form method="post" action="AccionNuevoAuto.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="Patente"><b>Patente:</b></label>
                <input id="Patente" name="Patente" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div><br>
            <div class="form-group">
                <label for="Marca"><b>Marca:</b></label>
                <input id="Marca" name="Marca" type="text" class="form-control" required pattern="[A-Za-z][A-Za-z0-9 ]*">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El primer caracter de la marca debe ser una letra.
                </div>
            </div><br>
            <div class="form-group">
                <label for="Modelo"><b>Modelo:</b></label>
                <input id="Modelo" name="Modelo" type="text" class="form-control" required pattern="[0-9]{1,4}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El modelo debe ser entre 1 y 4 números.
                </div>
            </div><br>
            <div class="form-group">
                <label for="DniDuenio"><b>DNI del Dueño:</b></label>
                <input id="DniDuenio" name="DniDuenio" type="text" class="form-control" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El DNI consta de 8 números.
                </div>
            </div><br>
            <input id="accion" name="accion" value="nuevo" type="hidden">
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
        <script src="../JS/FuncionesJava.js"></script>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>
