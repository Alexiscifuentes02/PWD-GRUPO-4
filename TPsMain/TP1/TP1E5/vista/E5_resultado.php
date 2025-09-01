<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado - Información Personal</title>
    <style>
        .resultado {
            margin: 20px;
            padding: 20px;
            border: 1px solid #4CAF50;
            background-color: #f9f9f9;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        .mensaje {
            font-size: 18px;
            color: #333;
        }
        .volver {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .volver:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Información Personal</h2>
        <p class="mensaje"><?php echo $mensaje; ?></p>
        
        <a href="../controlador/E5_controlador.php" class="volver">Volver al formulario</a>
    </div>
    <br>
    <a href="../../TP1.php">Volver al TP1</a>
</body>
</html>