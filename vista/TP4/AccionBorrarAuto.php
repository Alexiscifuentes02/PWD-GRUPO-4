<?php 
    $tituloPagina = "AccionBorrarAuto";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAmbAuto = new AbmAuto();

    if(isset($datos['accion'])){
        if($datos['accion'] == 'borrar'){
            if($objAmbAuto->baja($datos)){
                $resp = true;
            }
        }
    }
?>

<div id="ejercicio">
    <div align="center" id="ejercicioFormulario">
        <h3>Auto</h3>
        <?php
            if($resp){
                echo "<div class='alert alert-danger text-center fs-4' role='alert'>
                     ¡¡Se ha eliminado el auto correctamente!!
                     </div>";
            }else{
                echo "<div class='alert alert-danger text-center fs-4' role='alert'>
                     ¡¡NO se ha eliminado el auto correctamente!!
                     </div>";
            }          
        ?>
        <br><a href="VerAutos.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<br><br><br>
<?php include_once("../Estructura/Pie.php"); ?>