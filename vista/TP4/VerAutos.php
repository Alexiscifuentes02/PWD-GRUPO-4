<?php 
    $tituloPagina = "TP 4 - Ejercicio 3 (VerAutos.php)";
    include_once("../Estructura/Encabezado.php");
    include_once("../../configuracion.php");

    $objAbmAuto = new AbmAuto();
    $arrayAutos = $objAbmAuto->obtenerAutos();
    $i = 1;
?>
<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php	
            if(count($arrayAutos) != 0){
                echo "<h3 align='center'>Listado de Autos</h3>";
                echo "<ul class= 'list-group' >";
                foreach($arrayAutos as $objAuto){
                    echo "<li class='list-group-item active' aria-current= 'true' align>Auto ". $i . "</li>";;
                    echo "<li class='list-group-item'><b>Patente</b>: " . $objAuto->getPatente() ."</li>";  
                    echo "<li class='list-group-item'><b>Marca</b>: " . $objAuto->getMarca() ."</li>"; 
                    echo "<li class='list-group-item'><b>Modelo</b>: " . $objAuto->getModelo() ."</li>"; 
                    $objPersona = $objAuto->getObjPersona();
                    echo "<li class='list-group-item'><b>Dni dueño</b>: " .$objPersona->getNroDni() ."</li>"; 
                    echo "<li class='list-group-item'><b>Dueño</b>: "  .$objPersona->getNombre() . " " .$objPersona->getApellido() ."</li>"; 
                    echo "<li class='list-group-item'><a href=AccionBorrarAuto.php?accion=borrar&Patente=" . urlencode($objAuto->getPatente()) ."><button class='btn btn-danger'>Borrar</button></a></li>";
                    echo "</ul><br>";
                    $i++;
                }
            }else{
                echo "<h5 align='center'>¡¡NO hay autos cargados en la base de datos!!</h5>";
            }
        ?>
    </div>
</div>
<?php include_once("../Estructura/Pie.php"); ?>