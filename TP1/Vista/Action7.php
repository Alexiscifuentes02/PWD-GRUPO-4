<?php
$tituloPagina = "TP 1 - Ejercicio7";
include_once("Estructura/Encabezado.php");
?>
    <main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
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
                    <a href="Ejercicio7.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include_once("Estructura/Pie.php");?>