<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora Matemática</title>
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
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
        input, select {
            padding: 5px;
            width: 150px;
        }
    </style>
</head>
<body>
    <h2>Calculadora Matemática</h2>
    <form method="GET" action="../controlador/E7_controlador.php">
        <div>
            <label for="numero1">Número 1:</label>
            <input type="text" id="numero1" name="numero1" 
                   value="<?php echo isset($numero1) ? htmlspecialchars($numero1) : ''; ?>"
                   class="<?php echo !empty($errores['numero1']) ? 'campo-con-error' : ''; ?>">
            <?php if (isset($errores['numero1'])): ?>
                <span class="error"><?php echo $errores['numero1']; ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="numero2">Número 2:</label>
            <input type="text" id="numero2" name="numero2" 
                   value="<?php echo isset($numero2) ? htmlspecialchars($numero2) : ''; ?>"
                   class="<?php echo !empty($errores['numero2']) ? 'campo-con-error' : ''; ?>">
            <?php if (isset($errores['numero2'])): ?>
                <span class="error"><?php echo $errores['numero2']; ?></span>
            <?php endif; ?>
        </div>
        <div>
            <label for="operacion">Operación:</label>
            <select id="operacion" name="operacion" 
                    class="<?php echo !empty($errores['operacion']) ? 'campo-con-error' : ''; ?>">
                <option value="">Seleccione una operación</option>
                <option value="suma" <?php echo (isset($operacion) && $operacion == 'suma') ? 'selected' : ''; ?>>Suma</option>
                <option value="resta" <?php echo (isset($operacion) && $operacion == 'resta') ? 'selected' : ''; ?>>Resta</option>
                <option value="multiplicacion" <?php echo (isset($operacion) && $operacion == 'multiplicacion') ? 'selected' : ''; ?>>Multiplicación</option>
                <option value="division" <?php echo (isset($operacion) && $operacion == 'division') ? 'selected' : ''; ?>>División</option>
                <option value="potencia" <?php echo (isset($operacion) && $operacion == 'potencia') ? 'selected' : ''; ?>>Potencia</option>
                <option value="radicacion" <?php echo (isset($operacion) && $operacion == 'radicacion') ? 'selected' : ''; ?>>Radicación</option>
                <option value="modulo" <?php echo (isset($operacion) && $operacion == 'modulo') ? 'selected' : ''; ?>>Módulo</option>
            </select>
            <?php if (isset($errores['operacion'])): ?>
                <span class="error"><?php echo $errores['operacion']; ?></span>
            <?php endif; ?>
        </div>
        <div>
            <input type="submit" name="botonCalcular" value="Calcular">
        </div>
    </form>
    <br>
    <a href="../../TP1.php">Volver al TP1</a>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formulario = document.querySelector('form');
            
            formulario.addEventListener('submit', function(event) {
                let hayErrores = false;
                const errores = {};
                
                // Validar número 1
                const numero1 = document.getElementById('numero1').value.trim();
                if (numero1 === '') {
                    errores['numero1'] = 'El número 1 es obligatorio.';
                    hayErrores = true;
                } else if (isNaN(numero1)) {
                    errores['numero1'] = 'El número 1 debe ser un valor numérico.';
                    hayErrores = true;
                }
                
                // Validar número 2
                const numero2 = document.getElementById('numero2').value.trim();
                if (numero2 === '') {
                    errores['numero2'] = 'El número 2 es obligatorio.';
                    hayErrores = true;
                } else if (isNaN(numero2)) {
                    errores['numero2'] = 'El número 2 debe ser un valor numérico.';
                    hayErrores = true;
                }
                
                // Validar operación
                const operacion = document.getElementById('operacion').value;
                if (!operacion) {
                    errores['operacion'] = 'La operación es obligatoria.';
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
                
                const inputs = document.querySelectorAll('input, select');
                inputs.forEach(input => {
                    input.classList.remove('campo-con-error');
                });
                
                // Mostrar nuevos errores
                for (const campo in errores) {
                    if (errores[campo]) {
                        let elemento;
                        
                        if (campo === 'operacion') {
                            elemento = document.getElementById('operacion');
                        } else {
                            elemento = document.getElementById(campo);
                        }
                        
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