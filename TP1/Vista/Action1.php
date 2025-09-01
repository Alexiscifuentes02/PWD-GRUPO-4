<?php
$tituloPagina = "TP 1 - Ejercicio 1";
include_once("Estructura/Encabezado.php");
?>

<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5 text-center">
                    <?php
                    if (isset($_GET['numero_form']) && is_numeric($_GET['numero_form'])) {
                        $numero = $_GET['numero_form'];

                        if ($numero > 0) {
                            echo "<h2 class='text-success mb-4'>✅ El número <b>|$numero|</b> es positivo</h2>";
                        } elseif ($numero < 0) {
                            echo "<h2 class='text-danger mb-4'>❌ El número <b>|$numero|</b> es negativo</h2>";
                        } else {
                            echo "<h2 class='text-warning mb-4'>⚠ El número es cero</h2>";
                        }
                    } else {
                        echo "<h2 class='text-danger mb-4'>⚠ NO SE RECIBIERON DATOS!!!</h2>";
                    }
                    ?>
                    <a href="Ejercicio1.php" class="btn btn-primary mt-3">Volver</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once("Estructura/Pie.php"); ?>
