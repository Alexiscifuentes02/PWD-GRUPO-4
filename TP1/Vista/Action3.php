<?php
$tituloPagina = "TP 1 - Ejercicio3";
include_once("Estructura/Encabezado.php");
?>
    <main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
                        if(!empty($_POST['nombre']) && 
                        !empty($_POST['apellido']) && 
                        !empty($_POST['edad']) && 
                        !empty($_POST['direccion'])){
                    
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $edad = $_POST['edad'];
                        $direccion = $_POST['direccion'];

                        echo "<h1>HOLA YO SOY ".strtoupper($nombre)."&nbsp;".strtoupper($apellido).",TENGO ".strtoupper($edad). " AÑOS Y VIVO EN ".strtoupper($direccion)."<br></h1>";
                        }else{
                            echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
                        }
                    ?>
                    <a href="Ejercicio3.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include_once("Estructura/Pie.php");?>
