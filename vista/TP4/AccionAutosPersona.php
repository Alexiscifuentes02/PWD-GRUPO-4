<?php 
    $tituloPagina = "TP 4 - Ejercicio 5 (AccionAutosPersona.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmPersona = new AbmPersona();
    $objAbmAuto = new AbmAuto();

    if(isset($datos['accion'])){
        if($datos['accion'] == 'buscar'){
            if($objPersona = $objAbmPersona->obtenerPersona($datos)){
                $resp = true;
                $colAutos = $objAbmAuto->obtenerAutosPersona($datos['NroDni']);
            }
        }
        if($resp) {
            $mensaje1 = "La acción " . $datos['accion'] . " se realizó correctamente.";
        } else {
            $mensaje1 = "La acción " . $datos['accion'] . " no pudo concretarse.";
        }
    }
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
    <?php
        $i = 1;
        if($resp){
            echo "<h3 align='center'>Listado de Autos por Personas</h3>";
            echo "<ul class= 'list-group' >";
            echo "<li class= 'list-group-item active' aria-current= 'true' align>Persona</li>";
            echo "<li class='list-group-item'><b>Dni</b>: " . $objPersona->getNroDni() ."</li>";  
            echo "<li class='list-group-item'><b>Apellido</b>: " . $objPersona->getApellido() ."</li>"; 
            echo "<li class='list-group-item'><b>Nombre</b>: " . $objPersona->getNombre() . "</li>";
            echo "<li class='list-group-item'><b>Fecha de nacimiento</b>: " . $objPersona->getFechaNac() . "</li>";
            echo "<li class='list-group-item'><b>Telefono</b>: " . $objPersona->getTelefono() . "</li>";
            echo "<li class='list-group-item'><b>Domicilio</b>: " . $objPersona->getDomicilio() . "</li><br>";
            if(isset($colAutos)){
                foreach($colAutos as $objAuto){
                    echo "<li class= 'list-group-item active' aria-current= 'true' align>Auto ". $i . "</li>";
                    echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                    echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                    echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() . "</li>";
                    echo "</ul><br>";
                    $i++;
                }
            }else{
                echo "<h5 align='center'>¡¡La persona NO posee autos!!</h5>";
            }
        }else{
            echo "<h5 align='center'>¡¡NO existe la Persona con el DNI ingresado!!</h5>";
        }
    ?>
    <br><a href="AutosPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>
