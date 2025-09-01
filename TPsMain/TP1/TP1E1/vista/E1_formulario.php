<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <title> TPE1</title>        
    </head>
    <body>
        <form id="formulario1" name="formulario1" method="POST" action="../controlador/E1_controlador.php">
        <label>Ingrese un número:</label>
        <input id="formulario1CampoNumerico" name="formulario1CampoNumerico" type="text">
        <input id="botonDeEnvio1" name="botonDeEnvio1" type="submit">
        </form>
        <script>
            const isNumeric = (string) => /^[+-]?\d+(\.\d+)?$/.test(string);           
            document.addEventListener("DOMContentLoaded", (event) => {
                document.getElementById('formulario1').addEventListener('submit', function(event) {
                    contenido = document.getElementById("formulario1CampoNumerico").value;
                    if(contenido===""||!(isNumeric(Number(contenido)))){
                        event.preventDefault();
                        if(document.getElementById('errorMessage')!=null){
                            document.getElementById('errorMessage').remove();
                        }
                        const crearDiv = document.createElement("div");
                        crearDiv.innerHTML = "<div id='errorMessage' name='errorMessage'>Error, ingrese un número válido.</div>";
                        document.getElementById('formulario1').appendChild(crearDiv);
                    }
                });
            });
            
        </script>
        <br>
        <a href="../../TP1.php">Volver</a>
    </body>
</html> 