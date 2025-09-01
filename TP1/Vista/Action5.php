<?php
$tituloPagina = "TP 1 - Ejercicio5";
include_once("Estructura/Encabezado.php");
        if(!empty($_GET['nombre_form']) && 
            !empty($_GET['apellido_form']) && 
            !empty($_GET['edad_form']) && 
            !empty($_GET['direccion_form']) &&
            !empty($_GET['sexo_form'])){

            $nombre = $_GET['nombre_form'];
            $apellido = $_GET['apellido_form'];
            $edad = $_GET['edad_form'];
            $direccion = $_GET['direccion_form'];
            $estudios = $_GET['estudios'];
            $sexo = $_GET['sexo_form'];
        
            if(isset($_GET['estudios'])){
                $estudios = implode(", ", $_GET['estudios']); 
            }

            echo "<h2> Datos:<br></h2>".
                "<h3>Nombre: ".$nombre."<br>
                Apellido: ".$apellido."<br>
                Edad: ".$edad."<br>
                Direccion: ".$direccion."<br>
                Estudios: ".$estudios."<br>
                Sexo: ".$sexo."<br>
                </h3>";   
        }else{
            echo "<br>NO SE RECIBIERON TODOS LOS DATOS!!!";   
        }
    ?> 
    <a href="Ejercicio5.php">Volver</a>
    <?php
    include_once("Estructura/Pie.php");
    ?>
