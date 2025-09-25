<?php 
    $tituloPagina = "AccionCambioDuenio";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmAuto = new AbmAuto();
    $objAbmPersona = new AbmPersona();
    $autoEncontrado = false;
    $personaEncontrada = false;
    $duenioActual = false;

    if(isset($datos['accion'])){
        if($datos['accion'] == 'editar'){
            $datos['NroDni'] = $datos['DniDuenio'];
            $objAuto = $objAbmAuto->obtenerAuto($datos);
            $objPersona = $objAbmPersona->obtenerPersona($datos);
            //Chequeo que la persona esté cargada en la BD
            if(isset($objPersona)){
                $personaEncontrada = true;
                //Chequeo que el auto esté cargado en la BD
                if(isset($objAuto)){
                    $autoEncontrado = true;
                    $datos['Marca'] = $objAuto->getMarca();
                    $datos['Modelo'] = $objAuto->getModelo();
                    //Chequeo que no se haya ingresado al dueño actual
                    if($objAuto->getObjPersona()->getNroDni() != $datos['DniDuenio']){
                        if($objAbmAuto->modificacion($datos)){
                            $resp = true;
                            $objAuto = $objAbmAuto->obtenerAuto($datos);
                        }
                    }else{
                        $duenioActual = true;
                    }
                }
            }
        }
    }
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<h3 align='center'>Se ha cambiado el dueño del auto con exito</h3>";
                echo "<ul class= 'list-group' >";
                echo "<li class= 'list-group-item active' aria-current= 'true' align>Auto</li>";
                echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() . "</li>";
                echo "<li class='list-group-item'><b>DNI del Dueño</b>: " . $objAuto->getObjPersona()->getNroDni() ."</li>";
            }else{
                echo "<div class='alert alert-danger text-center fs-4' role='alert'>
                ¡¡NO se ha cambiado el nuevo dueño!!
                </div>";
            }
            if(!$personaEncontrada || !$autoEncontrado){
                echo "<div class='alert alert-danger text-center fs-4' role='alert'>
                ¡¡NO existe el dueño/auto ingresado en la Base de Datos!!</h5>
                </div>";
            }
            if($duenioActual){
                echo "<div class='alert alert-danger text-center fs-4' role='alert'>
                    ¡¡NO puede elegir al dueño actual, Debe ingresar otro DNI!!
                    </div>";   
            }
        ?>
        <br><a href="CambioDuenio.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<br><br><br>
<?php include_once("../Estructura/Pie.php"); ?>
