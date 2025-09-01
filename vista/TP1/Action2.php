<?php
$tituloPagina = "TP 1 - Ejercicio2";
include_once("Estructura/Encabezado.php");
        if($_GET){
            $arrayDias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
            $horas = [];
            $total = 0;
        
            // |isset| verifica si existe la variable en $_GET 
            foreach($arrayDias as $dia){
                    // Si existe este valor, lo guarda como int, caso contrario como 0 
                $inicio = isset($_GET[$dia."_inicio"]) ? (int)$_GET[$dia."_inicio"] : 0;
                $fin = isset($_GET[$dia."_fin"]) ? (int)$_GET[$dia."_fin"] : 0;
        
                if($fin > $inicio){
                    $diferencia = $fin - $inicio;
                }else{
                    $diferencia = 0; 
                }
        
                $horas[$dia] = $diferencia;
                $total += $diferencia;
            }
        
            echo "Horas cursadas por día: <br>";
            foreach($horas as $dia => $valor){
                echo "|".$dia."|: ".$valor." horas<br>";
            }
        
            echo "<br>TOTAL SEMANAL: $total horas\n";
        }else{
            echo "<br>NO SE RECIBIERON LOS DATOS!!!";
        }
    ?>
    <a href="Ejercicio2.php">Volver</a>
    <?php
    include_once("Estructura/Pie.php");
    ?>

    