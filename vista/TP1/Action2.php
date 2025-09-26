<?php
session_start();
$tituloPagina = "TP 1 - Ejercicio 2";

// Recuperar datos de la sesión
$horas = $_SESSION['horas'] ?? [];
$total = $_SESSION['total'] ?? 0;

// Limpiar la sesión para que no persista al recargar
unset($_SESSION['horas'], $_SESSION['total']);

include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
                    if ($horas) {
                        echo "Horas cursadas por día:<br>";
                        foreach ($horas as $dia => $valor) {
                            echo "|$dia|: $valor horas<br>";
                        }
                        echo "<br>TOTAL SEMANAL: $total horas";
                    } else {
                        echo "<h2 class='text-danger'>⚠ No se recibieron datos</h2>";
                    }
                    ?>
                    <a href="Ejercicio2.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
