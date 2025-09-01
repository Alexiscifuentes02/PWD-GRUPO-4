<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de Precios para Show</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
        .campo-con-error {
            border: 1px solid red;
        }
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input[type="text"], input[type="number"] {
            padding: 5px;
            width: 150px;
        }
        .botones {
            margin-top: 20px;
        }
        .botones input {
            padding: 8px 15px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Calculadora de Precios para Show</h2>
    <form method="GET" action="../controlador/E8_controlador.php">
        <div>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="0" max="120" 
                   value="<?php echo isset($edad) ? htmlspecialchars($edad) : ''; ?>"
                   class="<?php echo !empty($errores['edad']) ? 'campo-con-error' : ''; ?>">
            <?php if (isset($errores['edad'])): ?>
                <span class="error"><?php echo $errores['edad']; ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="estudiante">¿Es estudiante?</label>
            <input type="checkbox" id="estudiante" name="estudiante" value="1" 
                   <?php echo (isset($estudiante) && $estudiante) ? 'checked' : ''; ?>>
        </div>
        <div class="botones">
            <input type="submit" name="botonCalcular" value="Calcular Precio">
            <input type="button" value="Limpiar Formulario" onclick="limpiarFormulario()">
        </div>
    </form>
    <br>
    <a href="../../TP1.php">Volver al TP1</a>
    
    <script>
        function limpiarFormulario() {
            document.getElementById('edad').value = '';
            document.getElementById('estudiante').checked = false;
            
            // Limpiar errores
            const spansError = document.querySelectorAll('.error');
            spansError.forEach(span => span.remove());
            
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.classList.remove('campo-con-error');
            });
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const formulario = document.querySelector('form');
            
            formulario.addEventListener('submit', function(event) {
                let hayErrores = false;
                const errores = {};
                
                // Validar edad
                const edad = document.getElementById('edad').value.trim();
                if (edad === '') {
                    errores['edad'] = 'La edad es obligatoria.';
                    hayErrores = true;
                } else if (isNaN(edad) || edad < 0 || edad > 120) {
                    errores['edad'] = 'La edad debe ser un número válido entre 0 y 120.';
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
                
                const inputs = document.querySelectorAll('input');
                inputs.forEach(input => {
                    input.classList.remove('campo-con-error');
                });
                
                // Mostrar nuevos errores
                for (const campo in errores) {
                    if (errores[campo]) {
                        const elemento = document.getElementById(campo);
                        const spanError = document.createElement('span');
                        spanError.className = 'error';
                        spanError.textContent = errores[campo];
                        spanError.style.display = 'block';
                        
                        if (elemento) {
                            elemento.classList.add('campo-con-error');
                            elemento.parentNode.appendChild(spanError);
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>