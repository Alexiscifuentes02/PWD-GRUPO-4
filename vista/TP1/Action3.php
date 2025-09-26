<?php
session_start();
$tituloPagina = "TP 1 - Ejercicio 3";

// Recuperar datos de la sesión
$datos = $_SESSION['datos'] ?? [];
$recibidos = $_SESSION['recibidos'] ?? false;

// Limpiar sesión
unset($_SESSION['datos'], $_SESSION['recibidos']);

include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
                    if ($recibidos) {
                        echo "<h1>HOLA YO SOY " . strtoupper($datos['nombre']) . " " . strtoupper($datos['apellido']) . 
                             ", TENGO " . strtoupper($datos['edad']) . " AÑOS Y VIVO EN " . strtoupper($datos['direccion']) . "</h1>";
                    } else {
                        echo "<h2 class='text-danger'>NO SE RECIBIERON TODOS LOS DATOS!!!</h2>";
                    }
                    ?>
                    <a href="Ejercicio3.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
