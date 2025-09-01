<?php
$tituloPagina = "TP 1 - Ejercicio1";
include_once("Estructura/Encabezado.php");
        if (is_numeric($_GET['numero_form'])){
            $numero = $_GET['numero_form'];
            if($numero > 0){
                echo "<h1 class='positivo'>El número |" . $numero . "| es positivo</h1>";
            }elseif($numero < 0){
                echo "<h1 class='negativo'>El número |" . $numero . "| es negativo</h1>";
            }else{
                echo "<h1 class='cero'>El número es cero</h1>";
            }
        }else{
            echo "<h1>NO SE RECIBIERON DATOS!!!</h1><br>";
        }
    ?>
    <a href="Ejercicio1.php">Volver</a>
    <?php
    include_once("Estructura/Pie.php");
    ?>
