<?php
$tituloPagina = "TP 1 - Ejercicio6";
include_once("../Estructura/Encabezado.php");
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
                            !empty($_GET['direccion']) &&
                            !empty($_GET['sexo'])){

                            $nombre = $_GET['nombre'];
                            $apellido = $_GET['apellido'];
                            $edad = $_GET['edad'];
                            $direccion = $_GET['direccion'];
                            $estudios = $_GET['estudios'];
                            $sexo = $_GET['sexo'];
                            $deportes = $_GET['deportes'];
                        
                            if(isset($_GET['estudios'])){
                                $estudios = implode(", ", $_GET['estudios']); 
                            }

                            if(isset($_GET['deportes'])){
                                $deportes = implode(", ", $_GET['deportes']); 
                            }

                            echo "<h2> Datos:<br></h2>".
                                "<h3>Nombre: ".$nombre."<br>
                                Apellido: ".$apellido."<br>
                                Edad: ".$edad."<br>
                                Direccion: ".$direccion."<br>
                                Estudios: ".$estudios."<br>
                                Sexo: ".$sexo."<br>
                                Deportes: ".$deportes."<br>
                                </h3>";   
                        }else{
                            echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
                        }
                    ?> 
                    <a href="Ejercicio6.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include_once("../Estructura/Pie.php");?>
