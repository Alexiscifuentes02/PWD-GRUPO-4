<?php

    if($_POST){
        $titulo = $_POST['titulo'];
        $actor = $_POST['actor'];
        $director = $_POST['director'];
        $guion = $_POST['guion'];
        $produccion = $_POST['produccion'];
        $anio = $_POST['anio'];
        $nacionalidad = $_POST['nacionalidad'];
        $genero = $_POST['genero'];
        $duracion = $_POST['duracion'];
        $restriccion = $_POST['restriccion'];
    } else {
        header("Location: cargar-pelicula.php");

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>peliculas cargadas</title>
</head>
<body class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="container bg-green">
        <div class="row">
            <div class="col-12 border bg-primary text-white text-center py-3 mb-3">
                <h1>Cinem@s</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item bg-success-subtle"><strong>Título:</strong> <?php echo $titulo; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Actores:</strong> <?php echo $actor; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Director:</strong> <?php echo $director; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Guion:</strong> <?php echo $guion; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Producción:</strong> <?php echo $produccion; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Año:</strong> <?php echo $anio; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Nacionalidad:</strong> <?php echo $nacionalidad; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Género:</strong> <?php echo $genero; ?></li>
                    <li class="list-group-item bg-success-subtle"><strong>Duración:</strong> <?php echo $duracion; ?> minutos</li>
                    <li class="list-group-item bg-success-subtle"><strong>Restricción:</strong> <?php echo $restriccion; ?></li>
                </ul>
            </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="cargar-pelicula.php" class="btn btn-primary mt-3">Cargar otra película</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>