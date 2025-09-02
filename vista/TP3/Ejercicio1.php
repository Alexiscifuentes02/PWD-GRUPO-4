<?php
    $tituloPagina = "TP 3 - Ejercicio 1";
    include_once("../Estructura/Encabezado.php");
?>
   
<div class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow p-4" style="width: 500px;">
        <h4 class="mb-3 text-center">Subir Archivo</h4>
        <form action="Action1.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccione archivo (.doc o .pdf, maximo 2MB):</label>
                <input type="file" name="archivo" id="archivo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Subir</button>
        </form>
    </div>
</div>
<script src= "../../Controlador/TP3/ControladorCliente1.js"></script>
<?php include_once("../Estructura/Pie.php"); ?>



    
