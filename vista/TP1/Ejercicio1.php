<?php
$tituloPagina = "TP 1 - Ejercicio 1";
include_once(__DIR__ . "/../Estructura/Encabezado.php");
?>
<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-5">
                    <h2 class="mb-4 text-center">Ingrese un número</h2>
                    <form action="../../Controlador/TP1/Ejercicio1Controller.php" method="post" class="text-center">
                        <div class="mb-3">
                            <input type="text" name="numero_form" id="numero_form"
                                   class="form-control text-center" placeholder="Ej: 123">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Comprobar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once(__DIR__ . "/../Estructura/Pie.php"); ?>
