<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cinim@as</title>
</head>
<body class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="container border">
        <form action="pelicula-cargada.php" method="post">
            <row>
                <div class="col-12 border bg-primary text-white text-center py-3 mb-3">
                    <h1>Cinem@s</h1>
                </div>
            </row>
            <row class="d-flex flex-row justify-content-around">
                <div class="col-5">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div class="col-5">
                    <label for="actor">Actores</label>
                    <input type="text" name="actor" id="actor" class="form-control" required>
                </div>
            </row>
            <row class="d-flex flex-row justify-content-around">
                <div class="col-5">
                    <label for="director">Director</label>
                    <input type="text" name="director" id="director" class="form-control" required>
                </div>
                <div class="col-5">
                    <label for="guion">Guión</label>
                    <input type="text" name="guion" id="guion" class="form-control" required>
                </div>
            </row>
            <row class="d-flex flex-row justify-content-around">
                <div class="col-5">
                    <label for="produccion">Producción</label>
                    <input type="text" name="produccion" id="produccion" class="form-control" required>
                </div>
                <div class="col-5">
                    <label for="anio">Año</label>
                    <input type="number" name="anio" id="anio" class="form-control" required>
                </div>
            </row>
            <row class="d-flex flex-row justify-content-around">
                <div class="col-5">
                    <label for="Nacionalidad">Nacionalidad</label>
                    <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
                </div>
                <div class="col-5">
                    <label for="genero">Genéro</label>
                    <select name="" id="genero" class="form-select" required>
                        <option value="" disabled selected>Seleccione un género</option>
                        <option value="Acción">Acción</option>
                        <option value="Comedia">Comedia</option>
                        <option value="Drama">Drama</option>
                        <option value="Terror">Terror</option>
                        <option value="Ciencia Ficción">Ciencia Ficción</option>
                        <option value="Romance">Romance</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Animación">Animación</option>
                        <option value="Documental">Documental</option>
                        <option value="Musical">Musical</option>
                        <option value="Suspenso">Suspenso</option>
                        <option value="Fantasía">Fantasía</option>
                    </select>
                </div>
            </row>
            <row class="d-flex flex-row justify-content-around">
                <div class="col-5">
                    <label for="duracion">Duración</label>
                    <input type="number" name="duracion" id="Duracion" class="form-control" required>
                    <p>(minutos)</p>
                </div>
                <div class="col-5">
                    <fieldset>
                        <legend>Restricciones de edad</legend>
                        <div class="d-flex flex-row gap-3">
                            <div class="form-check">
                            <input type="radio" name="restriccion" id="todo-publico" value="todo-publico" class="form-check-input" required>
                            <label for="todo-publico" class="form-check-label">Todo Público</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="restriccion" id="mayor7" value="mayor7" class="form-check-input" required>
                            <label for="mayor7" class="form-check-label">Mayores de 7 años</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="restriccion" id="mayor18" value="mayor18" class="form-check-input" required>
                            <label for="mayor18" class="form-check-label">Mayores de 18 años</label>
                        </div>
                        </div>
                    </fieldset>
                </div>
            </row>
            <row class="d-flex flex-row justify-content-around">
                <div class="col-11">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea name="sinopsis" id="sinopsis" class="form-control" rows="4" required></textarea>
                </div>
            </row>
            <row class="d-flex flex-row">
                <div class="col-12 text-center my-3 d-flex justify-content-end">
                    <input type="submit" value="Cargar Película" class="btn btn-primary px-4 mx-2">
                    <input type="reset" value="Borrar" class="btn btn-secondary">
                </div>
            </row>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>