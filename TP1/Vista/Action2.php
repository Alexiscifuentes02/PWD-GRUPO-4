<?php
$tituloPagina = "TP 1 - Ejercicio2";
include_once("Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
                        if($_GET){
                            $arrayDias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
                            $horas = [];
                            $total = 0;
                        
                            foreach($arrayDias as $dia){
                                $valor = isset($_GET[$dia]) ? (int)$_GET[$dia] : 0;
                                $horas[$dia] = $valor;
                                $total += $valor;
                            }
                        
                            echo "Horas cursadas por día: <br>";
                            foreach($horas as $dia => $valor){
                                echo "|".$dia."|: ".$valor." horas<br>";
                            }
                        
                            echo "<br>TOTAL SEMANAL: $total horas\n";
                        }
                        
                    ?>
                    <a href="Ejercicio2.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
    
<?php include_once("Estructura/Pie.php");?>

    