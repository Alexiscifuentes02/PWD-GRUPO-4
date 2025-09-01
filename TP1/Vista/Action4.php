<?php
$tituloPagina = "TP 1 - Ejercicio4";
include_once("Estructura/Encabezado.php");
?>
    <main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
                        if(!empty($_GET['nombre']) && 
                            !empty($_GET['apellido']) && 
                            !empty($_GET['edad']) && 
                            !empty($_GET['direccion'])){

                            $nombre = $_GET['nombre'];
                            $apellido = $_GET['apellido'];
                            $edad = $_GET['edad'];
                            $direccion = $_GET['direccion'];

                            if($edad >= 18){
                                echo "<h1>HOLA YO SOY ".strtoupper($nombre)."&nbsp;".strtoupper($apellido).",TENGO ".strtoupper($edad). " AÑOS Y SOY MAYOR DE EDAD<br></h1>";
                            }else{
                                echo "<h1>HOLA YO SOY ".strtoupper($nombre)."&nbsp;".strtoupper($apellido).",TENGO ".strtoupper($edad). " AÑOS Y SOY MENOR DE EDAD<br></h1>";
                            } 
                        }else{
                            echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
                        }
                    ?>
                    <a href="Ejercicio4.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include_once("Estructura/Pie.php");?>

    