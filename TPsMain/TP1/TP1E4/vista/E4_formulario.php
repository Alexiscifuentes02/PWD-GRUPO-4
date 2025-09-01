<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <title> TPE1</title>        
    </head>
    <body>
        
        <form id="formulario1" name="formulario1" method="GET" action="../controlador/E4_controlador.php">
        <label>Nombre:</label>
        <input id="formularioCampoNombre" name="formularioCampoNombre" type="text">   
        <?php if (isset($errores['nombre'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['nombre']; ?></span>
        <?php endif; ?>
        <br>
        <label>Apellido:</label>
        <input id="formularioCampoApellido" name="formularioCampoApellido" type="text">
        <?php if (isset($errores['apellido'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['apellido']; ?></span>
        <?php endif; ?>
        <br>
        <label>Edad</label>
        <input id="formularioCampoEdad" name="formularioCampoEdad" type="text">
        <?php if (isset($errores['edad'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['edad']; ?></span>
        <?php endif; ?>
        <br>
        <label>Dirreción:</label>
        <input id="formularioCampoDireccion" name="formularioCampoDireccion" type="text">
        <?php if (isset($errores['direccion'])): ?>
                    <br>
                    <span class="error"><?php echo $errores['direccion']; ?></span>
        <?php endif; ?>
        <br>
        <input id="botonDeEnvio1" name="botonDeEnvio1" type="submit" value="Enviar">
        </form>
        <br>
        
        <script>
            
        </script>
        <br>
        <a href="../../TP1.php">Volver</a>
    </body>
</html> 