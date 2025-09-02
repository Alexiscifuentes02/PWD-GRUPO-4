<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"> 
        <title>TPE2 - Calculadora de Horas</title>
        <script src="../../../JQuery/jquery-3.7.1.js"></script>
        <style>
            .error {
                color: red;
                font-size: 0.9em;
                margin-left: 10px;
            }
            .campo-error {
                border: 2px solid red;
            }
            #divErrores {
                color: red;
                margin: 10px 0;
                padding: 10px;
                border: 1px solid red;
                background-color: #ffeeee;
                border-radius: 5px;
            }
            table {
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h2>Calculadora de Horas de Cursada</h2>
        <form id="formularioHoras" name="formularioHoras" method="POST" action="../controlador/E2_controlador.php">
            <table>
                <tr>
                    <th><label>Lunes:</label></th>
                    <td><input id="formularioHoras1" name="formularioHoras1" type="time" class="hora-inicio"></td>
                    <td><label> a </label></td>
                    <td><input id="formularioHorasFin1" name="formularioHorasFin1" type="time" class="hora-fin"></td>
                    <td><span class="error" id="error1"></span></td>
                </tr>
                <tr>
                    <th><label>Martes:</label></th>
                    <td><input id="formularioHoras2" name="formularioHoras2" type="time" class="hora-inicio"></td>
                    <td><label> a </label></td>
                    <td><input id="formularioHorasFin2" name="formularioHorasFin2" type="time" class="hora-fin"></td>
                    <td><span class="error" id="error2"></span></td>
                </tr>
                <tr>
                    <th><label>Miércoles:</label></th>
                    <td><input id="formularioHoras3" name="formularioHoras3" type="time" class="hora-inicio"></td>
                    <td><label> a </label></td>
                    <td><input id="formularioHorasFin3" name="formularioHorasFin3" type="time" class="hora-fin"></td>
                    <td><span class="error" id="error3"></span></td>
                </tr>
                <tr>
                    <th><label>Jueves:</label></th>
                    <td><input id="formularioHoras4" name="formularioHoras4" type="time" class="hora-inicio"></td>
                    <td><label> a </label></td>
                    <td><input id="formularioHorasFin4" name="formularioHorasFin4" type="time" class="hora-fin"></td>
                    <td><span class="error" id="error4"></span></td>
                </tr>
                <tr>
                    <th><label>Viernes:</label></th>
                    <td><input id="formularioHoras5" name="formularioHoras5" type="time" class="hora-inicio"></td>
                    <td><label> a </label></td>
                    <td><input id="formularioHorasFin5" name="formularioHorasFin5" type="time" class="hora-fin"></td>
                    <td><span class="error" id="error5"></span></td>
                </tr>
            </table>   
            <br>        
            <input id="botonDeEnvio1" name="botonDeEnvio1" type="submit" value="Calcular Horas">
        </form>
        
        <script>
            $(document).ready(function() {
                // Limpiar errores al cambiar los campos
                $('.hora-inicio, .hora-fin').on('input', function() {
                    const id = $(this).attr('id');
                    const dayNumber = id.replace('formularioHoras', '').replace('Fin', '');
                    $('#error' + dayNumber).text('').hide();
                    $(this).removeClass('campo-error');
                });
                
                // Validar formulario al enviar
                $('#formularioHoras').on('submit', function(e) {
                    let isValid = true;
                    const errores = [];
                    
                    // Validar cada día
                    for (let i = 1; i <= 5; i++) {
                        const inicio = $('#formularioHoras' + i).val();
                        const fin = $('#formularioHorasFin' + i).val();
                        const errorElement = $('#error' + i);
                        
                        // Limpiar error previo
                        errorElement.text('').hide();
                        $('#formularioHoras' + i).removeClass('campo-error');
                        $('#formularioHorasFin' + i).removeClass('campo-error');
                        
                        // Validar campos completos
                        if ((inicio && !fin) || (!inicio && fin)) {
                            errorElement.text('Debe completar ambos campos').show();
                            $('#formularioHoras' + i).addClass('campo-error');
                            $('#formularioHorasFin' + i).addClass('campo-error');
                            isValid = false;
                            errores.push('Día ' + i + ': Debe completar ambos campos');
                        }
                        // Validar que inicio sea menor que fin
                        else if (inicio && fin && inicio >= fin) {
                            errorElement.text('La hora de inicio debe ser anterior a la de fin').show();
                            $('#formularioHoras' + i).addClass('campo-error');
                            $('#formularioHorasFin' + i).addClass('campo-error');
                            isValid = false;
                            errores.push('Día ' + i + ': La hora de inicio debe ser anterior a la de fin');
                        }
                        // Validar formato de hora
                        else if (inicio && fin) {
                            const timeRegex = /^([01][0-9]|2[0-3]):([0-5][0-9])$/;
                            if (!timeRegex.test(inicio) || !timeRegex.test(fin)) {
                                errorElement.text('Formato de hora inválido').show();
                                $('#formularioHoras' + i).addClass('campo-error');
                                $('#formularioHorasFin' + i).addClass('campo-error');
                                isValid = false;
                                errores.push('Día ' + i + ': Formato de hora inválido');
                            }
                        }
                    }
                    
                    // Verificar que al menos un día tenga horas completas
                    let hasValidDay = false;
                    for (let i = 1; i <= 5; i++) {
                        const inicio = $('#formularioHoras' + i).val();
                        const fin = $('#formularioHorasFin' + i).val();
                        
                        if (inicio && fin) {
                            hasValidDay = true;
                            break;
                        }
                    }
                    
                    if (!hasValidDay) {
                        isValid = false;
                        errores.push('Debe completar al menos un día completo de horarios');
                        $('#divErrores').remove();
                        $('<div id="divErrores"><h3>Error:</h3><p>Debe completar al menos un día completo de horarios</p></div>')
                            .insertAfter('#formularioHoras');
                    }
                    
                    // Si hay errores, prevenir el envío y mostrarlos
                    if (!isValid) {
                        e.preventDefault();
                        $('#divErrores').remove();
                        if (errores.length > 0) {
                            let errorHtml = '<div id="divErrores"><h3>Errores en el formulario:</h3><ul>';
                            $.each(errores, function(index, error) {
                                errorHtml += '<li>' + error + '</li>';
                            });
                            errorHtml += '</ul></div>';
                            
                            $(errorHtml).insertAfter('#formularioHoras');
                        }
                    }
                    // Si no hay errores, el formulario se envía normalmente
                });
            });
        </script>
        <br>
        <a href="../../TP2.php">Volver al TP2</a>
    </body>
</html>