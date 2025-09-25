<?php 
    $tituloPagina = "TP 4 - Ejercicio 4 (BuscarAuto.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <h3 align="center">Buscar Auto</h3>
        <form method="post" action="../Accion/AccionBuscarAuto.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="Patente"><b>Patente:</b></label><br/>
                <input id="Patente" name="Patente" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div>
            <br>
            <input id="accion" name="accion" value="buscar" type="hidden">
            <input type="submit" class="btn btn-success"/>
        </form>
        <br><a href="VerAutos.php"><button class = "btn btn-primary">Ver Autos</button></a>
        <script src="../JS/FuncionesJava.js"></script>
    </div>
</div>
<br><br><br>
<?php include_once("../Estructura/Pie.php"); ?>
