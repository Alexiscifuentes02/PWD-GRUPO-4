<?php
    $tituloPagina = "TP 2 - Ejercicio 4";
    include_once("../Estructura/Encabezado.php");
?>
    <div class="container mt-4">
        <h2 class="mb-4">Cinema</h2>
        <form id="formPelicula" action="Action4.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" required>
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese un Titulo.</div>
                </div>
                <div class="col">
                    <label class="form-label">Actores</label>
                    <input type="text" class="form-control" name="actores" required>
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese los Actores.</div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Director</label>
                    <input type="text" class="form-control" name="director" required>
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese un Director.</div>
                </div>
                <div class="col">
                    <label class="form-label">Guion</label>
                    <input type="text" class="form-control" name="guion" required>
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese un Nombre.</div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Produccion</label>
                    <input type="text" class="form-control" name="produccion" required>
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese la Produccion.</div>
                </div>
                <div class="col">
                    <label class="form-label">Año</label>
                    <input type="number" class="form-control" name="anio" required maxlength="4">
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese el Año.</div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad" required>
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese la nacionalidad.</div>
                </div>
                <div class="col">
                    <label class="form-label">Genero</label>
                    <select class="form-select" name="genero" required>
                        <option value="">Seleccione..</option>
                        <option>Comedia</option>
                        <option>Drama</option>
                        <option>Terror</option>
                        <option>Romanticas</option>
                        <option>Suspenso</option>
                        <option>Otras</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Duracion (minutos)</label>
                    <input type="number" class="form-control" name="duracion" required maxlength="3">
                    <div class="valid-feedback text-center">Muy Bien!</div>
                    <div class="invalid-feedback text-center">Ingrese la direccion.</div>
                </div>
                <div class="col">
                    <label class="form-label">Restricciones de Edad</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" value="Todos los públicos" required>
                        <label class="form-check-label">Todos los públicos</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" value="Mayores de 7 años">
                        <label class="form-check-label">Mayores de 7 años</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" value="Mayores de 18 años">
                        <label class="form-check-label">Mayores de 18 años</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Sinopsis</label>
                <textarea class="form-control" name="sinopsis" rows="3" required></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
            </div>
        </form>
    </div>

    <script src="../../Controlador/TP2/ControladorCliente4.js"></script>
    <?php include_once("../Estructura/Pie.php"); ?>