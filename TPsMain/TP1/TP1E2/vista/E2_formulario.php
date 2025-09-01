<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <title> TPE1</title>        
    </head>
    <body>
        <form id="formularioHoras" name="formularioHoras" method="GET" action="../controlador/E2_controlador.php">
        <table>
            <tr>
                <th><label>Lunes:</label></th>
                <th><input id="formularioHoras1" name="formularioHoras1" type="time"></th>
                <th><label> a </label></th>
                <th><input id="formularioHorasFin1" name="formularioHorasFin1" type="time"></th>
            </tr>
            <tr>
                <th><label>Martes:</label></th>
                <th><input id="formularioHoras2" name="formularioHoras2" type="time"></th>
                <th><label> a </label></th>
                <th><input id="formularioHorasFin2" name="formularioHorasFin2" type="time"></th>
            </tr>
            <tr>
                <th><label>Miércoles:</label></th>
                <th><input id="formularioHoras3" name="formularioHoras3" type="time"></th>
                <th><label> a </label></th>
                <th><input id="formularioHorasFin3" name="formularioHorasFin3" type="time"></th>
            </tr>
            <tr>
                <th><label>Jueves:</label></th>
                <th><input id="formularioHoras4" name="formularioHoras4" type="time"></th>
                <th><label> a </label></th>
                <th><input id="formularioHorasFin4" name="formularioHorasFin4" type="time"></th>
            </tr>
            <tr>
                <th><label>Viernes:</label></th>
                <th><input id="formularioHoras5" name="formularioHoras5" type="time"></th>
                <th><label> a </label></th>
                <th><input id="formularioHorasFin5" name="formularioHorasFin5" type="time"></th>
            </tr>
        </table>   
        <br>        
        <input id="botonDeEnvio1" name="botonDeEnvio1" type="submit">
        </form>
        <script>
document.addEventListener('DOMContentLoaded', function() {
    const formulario = document.getElementById('formularioHoras');
    const dias = [
        {nombre: 'Lunes', inicio: 'formularioHoras1', fin: 'formularioHorasFin1'},
        {nombre: 'Martes', inicio: 'formularioHoras2', fin: 'formularioHorasFin2'},
        {nombre: 'Miércoles', inicio: 'formularioHoras3', fin: 'formularioHorasFin3'},
        {nombre: 'Jueves', inicio: 'formularioHoras4', fin: 'formularioHorasFin4'},
        {nombre: 'Viernes', inicio: 'formularioHoras5', fin: 'formularioHorasFin5'}
    ];

    formulario.addEventListener('submit', function(event) {
        eliminarErrores();
        
        let hayErrores = false;
        const errores = [];

        for (let i = 0; i < dias.length; i++) {
            const dia = dias[i];
            const inputInicio = document.getElementById(dia.inicio);
            const inputFin = document.getElementById(dia.fin);
            const valorInicio = inputInicio.value;
            const valorFin = inputFin.value;

            if ((valorInicio && !valorFin) || (!valorInicio && valorFin)) {
                hayErrores = true;
                errores.push(`${dia.nombre}: Debe completar ambos campos de hora.`);
            }
            else if (valorInicio && valorFin && valorInicio >= valorFin) {
                hayErrores = true;
                errores.push(`${dia.nombre}: La hora de inicio debe ser anterior a la hora de fin.`);
            }
        }
        if (hayErrores) {
            event.preventDefault();
            mostrarErrores(errores);
        }
    });

    function eliminarErrores() {
        const divErrorExistente = document.getElementById('divErrores');
        if (divErrorExistente) {
            divErrorExistente.remove();
        }
    }

    function mostrarErrores(errores) {
        const divError = document.createElement('div');
        divError.id = 'divErrores';
        divError.style.color = 'red';
        divError.style.margin = '10px 0';
        divError.style.padding = '10px';
        divError.style.border = '1px solid red';
        divError.style.backgroundColor = '#ffeeee';

        const titulo = document.createElement('h3');
        titulo.textContent = 'Errores en el formulario:';
        divError.appendChild(titulo);

        const lista = document.createElement('ul');
        for (let i = 0; i < errores.length; i++) {
            const item = document.createElement('li');
            item.textContent = errores[i];
            lista.appendChild(item);
        }
        divError.appendChild(lista);
        formulario.parentNode.insertBefore(divError, formulario.nextSibling);
    }
});
</script>
        <br>
        <a href="../../TP1.php">Volver</a>
    </body>
</html> 