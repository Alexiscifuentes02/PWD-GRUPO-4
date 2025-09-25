<?php 
    $tituloPagina = "TP 4 - Ejercicio 9 (ActualizarDatosPersona.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $datos = $_SESSION['datos'];
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3 align="center">Editar Info Persona</h3>
            <form method="post" action="AccionActualizarDatosPersona.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <label><b>Número de DNI:</b></label>
                    <input id="NroDni" name="NroDni" class="form-control" type="text" value="<?php echo $datos['NroDni']?>" required readonly>
                </div><br>
                    
                <div class="form-group">
                    <label><b>Apellido:</b></label><br/>
                    <input id="Apellido" name="Apellido" class="form-control" type="text" value="<?php echo $datos['Apellido']?>" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Solo letras.
                    </div>
                </div><br>
                    
                <div class="form-group">
                    <label for="Nombre"><b>Nombre:</b></label><br/>
                    <input id="Nombre" name="Nombre" class="form-control" type="text" value="<?php echo $datos['Nombre']?>" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Solo letras.
                    </div>
                </div><br>
                    
                <div class="form-group">
                    <label for="fechaNac"><b>Fecha de Nacimiento:</b></label><br/>
                    <input id="fechaNac" name="fechaNac" class="form-control" type="text" value="<?php echo $datos['fechaNac']?>" required pattern="^(?!0000)(?:(?!02-29)(([1-9]\d(?:0[48]|[2468][048]|[13579][26])|([2468][048]|[13579][26])00)-02-29)|([1-9]\d{3}|[2-9]\d{3})-(0[1-9]|1[0-2])-(0[1-9]|1\d|2[0-8])|(?:([1-9]\d(?:0[48]|[2468][048]|[13579][26])|([2468][048]|[13579][26])00)-02-(?:29|30))|(?:([1-9]\d{3}|[2-9]\d{3})-(0[13-9]|1[0-2])-(?:29|30|31)))$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Ejemplo: 2000-05-30.
                    </div>
                </div><br>
                    
                <div class="form-group">
                    <label><b>Teléfono:</b></label><br/>
                    <input id="Telefono" name="Telefono" class="form-control" type="text" value="<?php echo $datos['Telefono']?>" required pattern="[0-9]{7,10}">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Minimo 7, Maximo 10.
                    </div>
                </div><br>

                <div class="form-group">
                    <label><b>Domicilio:</b></label><br/>
                    <input id="Domicilio" name="Domicilio" class="form-control" type="text" value="<?php echo $datos['Direccion']?>" required pattern="^[a-zA-Z][a-zA-Z0-9\s]*$">
                    <div class="valid-feedback">
                        Correcto.
                    </div>
                    <div class="invalid-feedback">
                        Se aceptan números letras y espacios.
                    </div>
                </div>
                <br>
                <input id="accion" name ="accion" value="editar" type="hidden">
                <input type="submit" class="btn btn-success">
            </form>
            <script src="../JS/FuncionesJava.js"></script>
        <br><a href="BuscarPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>


