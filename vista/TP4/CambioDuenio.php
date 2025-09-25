<?php 
    $tituloPagina = "TP 4 - Ejercicio 8 (CambioDuenio.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");
?>

<div id="ejercicio">
    <div id="formulario">
        <h3 align="center">Cambio Duenio</h3>
        <form method="post" action="AccionCambioDuenio.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="Patente"><b>Patente del Auto:</b></label><br/>
                <input id="Patente" name="Patente" width="80" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayusculas, espacio y 3 numeros.
                </div>
            </div><br>
            <div class="form-group">
                <label><b>DNI del Nuevo Dueño:</b></label><br/>
                <input id="DniDuenio" name="DniDuenio" type="text" class="form-control" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El DNI tiene que contener 8 números.
                </div>
            </div><br><br>
            <input id="accion" name ="accion" value="editar" type="hidden">
            <input type="submit" class="btn btn-success">
        </form>
        <script src="../JS/FuncionesJava.js"></script>
    </div>
</div>
<br><br><br>
<?php include_once("../Estructura/Pie.php"); ?>