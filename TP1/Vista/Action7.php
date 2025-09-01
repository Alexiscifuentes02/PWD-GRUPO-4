<?php
$tituloPagina = "TP 1 - Ejercicio7";
include_once("Estructura/Encabezado.php");
    if(!empty($_POST['numero1']) &&
        !empty($_POST['numero2'])){

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        $resultado = 0;

        if($operacion == "SUMA"){
            $resultado = $num1 + $num2;
        }elseif($operacion == "RESTA"){
            $resultado = $num1 - $num2;
        }else{
            $resultado = $num1 * $num2;
        }

        echo "<h1>Resultado de la ".$operacion." de ".$num1." y ".$num2." = ".$resultado."</h1>";
    }else{
        echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
    }
?> 
<br><a href="Ejercicio7.php">Volver</a>
    <?php
    include_once("Estructura/Pie.php");
    ?>