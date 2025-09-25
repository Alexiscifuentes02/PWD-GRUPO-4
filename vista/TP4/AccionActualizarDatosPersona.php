<?php 
    $tituloPagina = "TP 4 - Ejercicio 9 (AccionActualizarDatosPersona.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmPersona = new AbmPersona();

    if (isset($datos['accion'])) {
        if($datos['accion'] == 'editar') {
            if($objAbmPersona->modificacion($datos)){
                $resp = true;
                $objPersona = $objAbmPersona->obtenerPersona($datos);
            }
        }
    }
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<h5 align='center'>Se ha actualizado la información de la persona con exito</h5>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Persona</li>";
                echo "<li class='list-group-item'><b>Dni</b>: " . $objPersona->getNroDni() ."</li>";  
                echo "<li class='list-group-item'><b>Apellido</b>: " . $objPersona->getApellido() ."</li>"; 
                echo "<li class='list-group-item'><b>Nombre</b>: " . $objPersona->getNombre() . "</li>";
                echo "<li class='list-group-item'><b>Fecha de nacimiento</b>: " . $objPersona->getFechaNac() . "</li>";
                echo "<li class='list-group-item'><b>Telefono</b>: " . $objPersona->getTelefono() . "</li>";
                echo "<li class='list-group-item'><b>Domicilio</b>: " . $objPersona->getDomicilio() . "</li>";
            }else{
                echo "<h5 align='center'>¡¡NO se ha podido actualizar la información de la persona!!</h5>";
            }
        ?>
        <br><a href="BuscarPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>
