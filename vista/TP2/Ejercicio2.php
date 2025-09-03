<?php
    $tituloPagina = "TP 2 - Ejercicio 2";
    include_once("../Estructura/Encabezado.php");
?>
<meta charset="utf-8"> 
<title>TPE2 - Calculadora de Horas</title>
<script src="../../../JQuery/jquery-3.7.1.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f6fa;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #1a4e8a;
    }

    .container-form {
        max-width: 600px;
        margin: 40px auto;
        padding: 25px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        text-align: right;
        padding-right: 10px;
        color: #333;
        font-weight: normal;
    }

    td {
        padding: 8px;
    }

    input[type="time"] {
        padding: 6px;
        border: 1px solid #ccc;
        border-radius: 6px;
        width: 100%;
    }

    .error {
        color: red;
        font-size: 0.85em;
    }

    .campo-error {
        border: 2px solid red !important;
    }

    #divErrores {
        color: red;
        margin: 15px 0;
        padding: 12px;
        border: 1px solid red;
        background-color: #ffeeee;
        border-radius: 8px;
    }

    input[type="submit"] {
        display: block;
        margin: 20px auto 0 auto;
        padding: 10px 20px;
        background-color: #1a4e8a;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 1em;
        transition: background 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #15507a;
    }
</style>

<div class="container-form">
    <h2>Calculadora de Horas de Cursada</h2>
    <form id="formularioHoras" name="formularioHoras" method="POST" action="../../Controlador/TP2/ControladorServidor2.php">
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
        <input id="botonDeEnvio1" name="botonDeEnvio1" type="submit" value="Calcular Horas">
    </form>
</div>

<?php include_once("../Estructura/Pie.php"); ?>
