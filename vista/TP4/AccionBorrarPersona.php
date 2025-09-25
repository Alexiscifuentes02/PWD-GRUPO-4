<?php 
    $tituloPagina = "AccionBorrarPersona";
    include_once("../Estructura/Encabezado.php");
    include_once("../../Configuracion.php");

    $datos = data_submitted();
    $resp = false;
    $objAbmPersona = new AbmPersona();
    $objAmbAuto = new AbmAuto();
    $colAutos = $objAmbAuto->obtenerAutos();
    $i = 0;
    $encontrado = false;

    if(isset($datos['accion'])){
        if($datos['accion'] == 'borrar'){
            if(isset($colAutos)){
                while($i < count($colAutos) && !$encontrado){
                    if($datos["NroDni"] == $colAutos[$i]->getObjPersona()->getNroDni()){
                        $encontrado = true;
                    }
                    $i++;
                }

                if(!$encontrado){
                    if($objAbmPersona->baja($datos)){
                        $resp = true;
                    }
                }
            }
        }
    }
?>

<div id="ejercicio">
    <div align="center" id="ejercicioFormulario">
        <?php
            if($resp){
                echo "<div class='alert alert-danger text-center fs-3' role='alert'>
                    ¡¡Se ha eliminado la persona correctamente!!
                    </div>";
            }else{
                echo "<div class='alert alert-danger text-center fs-3' role='alert'>
                ¡¡NO se ha eliminado la persona correctamente!!
                </div>";
            }
            if($encontrado){
                echo "<div class='alert alert-danger text-center fs-3' role='alert'>
                ¡¡NO se puede eliminar la persona porque es dueña de auto/s. Debe borrar primero el Auto!!
                </div>";
            }
        ?>
        <br><a href="ListaPersonas.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>
<br><br><br><br><br>
<?php include_once("../Estructura/Pie.php"); ?>
