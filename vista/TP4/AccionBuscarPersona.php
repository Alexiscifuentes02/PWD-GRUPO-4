<?php 
    $tituloPagina = "AccionBuscarPersona";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmPersona = new AbmPersona();

    if(isset($datos['accion'])) {
        if($datos['accion'] == 'buscar'){
            if($objPersona = $objAbmPersona->obtenerPersona($datos)){
                $resp = true;
            }
        }
    }
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($resp){
                $colInfo = $objAbmPersona->arregloInfoAuto($datos);
                //Uso $_SESSION para pasar los datos al formulario ActualizarDatosPersona.php
                session_start();
                $_SESSION['datos'] = $colInfo;
                echo "<h5 align='center'>Datos de la Persona</h5>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Persona</li>";
                echo "<li class='list-group-item'><b>Dni</b>: " . $objPersona->getNroDni() ."</li>";  
                echo "<li class='list-group-item'><b>Apellido</b>: " . $objPersona->getApellido() ."</li>"; 
                echo "<li class='list-group-item'><b>Nombre</b>: " . $objPersona->getNombre() . "</li>";
                echo "<li class='list-group-item'><b>Fecha de nacimiento</b>: " . $objPersona->getFechaNac() . "</li>";
                echo "<li class='list-group-item'><b>Telefono</b>: " . $objPersona->getTelefono() . "</li>";
                echo "<li class='list-group-item'><b>Domicilio</b>: " . $objPersona->getDomicilio() . "</li>";
                echo "<br><a href='ActualizarDatosPersona.php'><button class='btn btn-success'>Actualizar Datos</button></a>";
            }else{
                echo "<h5 align='center'>¡¡NO existe una persona con el DNI ingresado!!</h5>";
            }
            
        ?>
        <br><a href="BuscarPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>