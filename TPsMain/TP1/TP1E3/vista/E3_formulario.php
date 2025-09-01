<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <title> TPE1</title>        
    </head>
    <body>
        <h3>Versión POST</h3>
        <br>
        <form id="formulario1" name="formulario1" method="POST" action="../controlador/E3_controlador.php">
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
        <h3>Versión GET</h3>
        <br>
        <form id="formulario2" name="formulario2" method="GET" action="../controlador/E3_controlador.php">
        <label>Nombre:</label>
        <input id="formulario2CampoNombre" name="formulario2CampoNombre" type="text">
        <?php if (isset($errores2['nombre'])): ?>
                    <br>
                    <span class="error"><?php echo $errores2['nombre']; ?></span>
        <?php endif; ?>
        <br>
        <label>Apellido:</label>
        <input id="formulario2CampoApellido" name="formulario2CampoApellido" type="text">
        <?php if (isset($errores2['apellido'])): ?>
                    <br>
                    <span class="error"><?php echo $errores2['apellido']; ?></span>
        <?php endif; ?>
        <br>
        <label>Edad</label>
        <input id="formulario2CampoEdad" name="formulario2CampoEdad" type="text">
        <?php if (isset($errores2['edad'])): ?>
                    <br>
                    <span class="error"><?php echo $errores2['edad']; ?></span>
        <?php endif; ?>
        <br>
        <label>Dirreción:</label>
        <input id="formulario2CampoDireccion" name="formulario2CampoDireccion" type="text">
        <?php if (isset($errores2['direccion'])): ?>
                    <br>
                    <span class="error"><?php echo $errores2['direccion']; ?></span>
        <?php endif; ?>
        <br>
        <input id="botonDeEnvio2" name="botonDeEnvio2" type="submit" value="Enviar">
        </form>
        <script>
            
        </script>
        <br>
        <a href="../../TP1.php">Volver</a>
    </body>
</html> 