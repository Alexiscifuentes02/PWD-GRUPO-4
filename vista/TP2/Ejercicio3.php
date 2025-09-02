<?php
    $tituloPagina = "TP 2 - Ejercicio 3";
    include_once("../Estructura/Encabezado.php");
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">Member Login</h2>

        <form id="formulario" method="post" action="Action3.php" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
                <div class="invalid-feedback">Ingrese un usuario.</div>
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
                <div id="claveFeedback" class="invalid-feedback">
                    La contraseña debe tener mínimo 8 caracteres, incluir letras y números, y no ser igual al usuario.
                </div>
            </div>
            <button class="btn btn-success w-100" type="submit">Login</button>
        </form>
    </div>
</div>

<script src="../../Controlador/TP2/ControladorCliente3.js"></script>
<?php include_once("../Estructura/Pie.php"); ?>
