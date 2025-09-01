<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <title> TPE1</title>
        <style>
            .error {
                color: red;
                font-size: 0.9em;
            }
            .campo-con-error {
                border: 1px solid red;
            }
        </style>
    </head>
    <body>
        
        <form id="formulario1" name="formulario1" method="GET" action="../controlador/E5_controlador.php">
        <label>Nombre:</label>
        <input id="formularioCampoNombre" name="formularioCampoNombre" type="text" value="<?php echo htmlspecialchars($nombre ?? ''); ?>" class="<?php echo !empty($errores['nombre']) ? 'campo-con-error' : ''; ?>">   
        <?php if (isset($errores['nombre'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['nombre']; ?></span>
        <?php endif; ?>
        <br>
        <label>Apellido:</label>
        <input id="formularioCampoApellido" name="formularioCampoApellido" type="text" value="<?php echo htmlspecialchars($apellido ?? ''); ?>" class="<?php echo !empty($errores['apellido']) ? 'campo-con-error' : ''; ?>">
        <?php if (isset($errores['apellido'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['apellido']; ?></span>
        <?php endif; ?>
        <br>
        <label>Edad</label>
        <input id="formularioCampoEdad" name="formularioCampoEdad" type="text" value="<?php echo htmlspecialchars($edad ?? ''); ?>" class="<?php echo !empty($errores['edad']) ? 'campo-con-error' : ''; ?>">
        <?php if (isset($errores['edad'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['edad']; ?></span>
        <?php endif; ?>
        <br>
        <label>Dirección:</label>
        <input id="formularioCampoDireccion" name="formularioCampoDireccion" type="text" value="<?php echo htmlspecialchars($direccion ?? ''); ?>" class="<?php echo !empty($errores['direccion']) ? 'campo-con-error' : ''; ?>">
        <?php if (isset($errores['direccion'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['direccion']; ?></span>
        <?php endif; ?>
        <br>
        <label>Género:</label>
        <select id="formularioGenero" name="formularioGenero" class="<?php echo !empty($errores['genero']) ? 'campo-con-error' : ''; ?>">
            <option value="">Seleccione...</option>
            <option value="hombre" <?php echo (isset($genero) && $genero == 'hombre') ? 'selected' : ''; ?>>Hombre</option>
            <option value="mujer" <?php echo (isset($genero) && $genero == 'mujer') ? 'selected' : ''; ?>>Mujer</option>
            <option value="otro" <?php echo (isset($genero) && $genero == 'otro') ? 'selected' : ''; ?>>Otro</option>
        </select>
        <?php if (isset($errores['genero'])): ?>
            <br>
            <span class="error"><?php echo $errores['genero']; ?></span>
        <?php endif; ?>
        <br>
        <div>
            <input type="radio" id="noEstudio" name="formularioEstudios" value="noEstudios" <?php echo (isset($estudios) && $estudios == 'noEstudios') ? 'checked' : ''; ?>>
            <label for="noEstudio">No tiene estudios</label><br>
            <input type="radio" id="primario" name="formularioEstudios" value="primarios" <?php echo (isset($estudios) && $estudios == 'primarios') ? 'checked' : ''; ?>>
            <label for="primario">Primario</label><br>
            <input type="radio" id="secundario" name="formularioEstudios" value="secundarios" <?php echo (isset($estudios) && $estudios == 'secundarios') ? 'checked' : ''; ?>>
            <label for="secundario">Secundario</label>
        </div>
        <?php if (isset($errores['estudios'])): ?>
            <span class="error"><?php echo $errores['estudios']; ?></span>
        <?php endif; ?>
        <br>
        <input id="botonDeEnvio1" name="botonDeEnvio1" type="submit" value="Enviar">
        </form>
        <br>
        
        <script>
            // JavaScript para validación en cliente
            document.addEventListener('DOMContentLoaded', function() {
                const formulario = document.getElementById('formulario1');
                
                formulario.addEventListener('submit', function(event) {
                    let hayErrores = false;
                    const errores = {};
                    
                    // Validar nombre
                    const nombre = document.getElementById('formularioCampoNombre').value.trim();
                    if (nombre === '') {
                        errores['nombre'] = 'El nombre es obligatorio.';
                        hayErrores = true;
                    }
                    
                    // Validar apellido
                    const apellido = document.getElementById('formularioCampoApellido').value.trim();
                    if (apellido === '') {
                        errores['apellido'] = 'El apellido es obligatorio.';
                        hayErrores = true;
                    }
                    
                    // Validar edad
                    const edad = document.getElementById('formularioCampoEdad').value.trim();
                    if (edad === '') {
                        errores['edad'] = 'La edad es obligatoria.';
                        hayErrores = true;
                    } else if (isNaN(edad) || edad < 0 || edad > 150) {
                        errores['edad'] = 'La edad debe ser un número válido entre 0 y 150.';
                        hayErrores = true;
                    }
                    
                    // Validar dirección
                    const direccion = document.getElementById('formularioCampoDireccion').value.trim();
                    if (direccion === '') {
                        errores['direccion'] = 'La dirección es obligatoria.';
                        hayErrores = true;
                    }
                    
                    // Validar género
                    const genero = document.getElementById('formularioGenero').value;
                    if (!genero) {
                        errores['genero'] = 'Debe seleccionar un género.';
                        hayErrores = true;
                    }
                    
                    // Validar estudios
                    const estudios = document.querySelector('input[name="formularioEstudios"]:checked');
                    if (!estudios) {
                        errores['estudios'] = 'Debe seleccionar un nivel de estudio.';
                        hayErrores = true;
                    }
                    
                    // Si hay errores, mostrarlos y prevenir el envío del formulario
                    if (hayErrores) {
                        event.preventDefault();
                        mostrarErrores(errores);
                    }
                });
                
                function mostrarErrores(errores) {
                    // Limpiar errores previos
                    const spansError = document.querySelectorAll('.error');
                    spansError.forEach(span => span.remove());
                    
                    const inputs = document.querySelectorAll('input[type="text"], select');
                    inputs.forEach(input => {
                        input.classList.remove('campo-con-error');
                    });
                    
                    // Mostrar nuevos errores
                    for (const campo in errores) {
                        if (errores[campo]) {
                            let elemento;
                            
                            if (campo === 'estudios') {
                                elemento = document.querySelector('input[name="formularioEstudios"]').parentNode;
                            } else if (campo === 'genero') {
                                elemento = document.getElementById('formularioGenero');
                            } else {
                                elemento = document.getElementById('formularioCampo' + campo.charAt(0).toUpperCase() + campo.slice(1));
                            }
                            
                            const spanError = document.createElement('span');
                            spanError.className = 'error';
                            spanError.textContent = errores[campo];
                            spanError.style.display = 'block';
                            
                            if (elemento) {
                                elemento.classList.add('campo-con-error');
                                elemento.parentNode.insertBefore(spanError, elemento.nextSibling);
                            }
                        }
                    }
                }
            });
        </script>
        <br>
        <a href="../../TP1.php">Volver</a>
    </body>
</html>