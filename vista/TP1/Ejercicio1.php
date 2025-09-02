<?php
$tituloPagina = "TP 1 - Ejercicio 1";
include_once("../Estructura/Encabezado.php");
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4">Ingrese un número</h3>
                <form method="get" action="Action1.php">
                    <div class="mb-3">
                        <label for="numero_form" class="form-label">Número:</label>
                        <input name="numero_form" type="number" id="numero_form" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f0f2f5; 
    }

    .card {
        background: #ffffff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .resultado {
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        display: inline-block;
    }
</style>

<?php include_once("../Estructura/Pie.php"); ?>
