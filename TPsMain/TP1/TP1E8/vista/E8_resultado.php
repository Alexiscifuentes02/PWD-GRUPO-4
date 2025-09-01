<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado del Cálculo de Precio</title>
    <style>
        .resultado {
            margin: 20px;
            padding: 20px;
            border: 1px solid #4CAF50;
            background-color: #f9f9f9;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            max-width: 600px;
        }
        .precio {
            font-size: 24px;
            margin: 10px 0;
            padding: 10px;
            background-color: #e8f5e9;
            border-radius: 5px;
            text-align: center;
        }
        .detalles {
            margin: 15px 0;
        }
        .botones {
            margin-top: 20px;
        }
        .botones a, .botones input {
            display: inline-block;
            padding: 10px 15px;
            margin-right: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .botones a:hover, .botones input:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Resultado del Cálculo de Precio</h2>
        
        <div class="precio">
            Precio de la entrada: $<?php echo $precio; ?>
        </div>
        
        <div class="detalles">
            <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
            <p><strong>Es estudiante:</strong> <?php echo $estudiante ? 'Sí' : 'No'; ?></p>
            <p><strong>Tipo de entrada:</strong> <?php echo CalculadoraPrecio::obtenerTipoEntrada($edad, $estudiante); ?></p>
        </div>
        
        <div class="botones">
            <a href="../controlador/E8_controlador.php">Volver a calcular</a>
        </div>
    </div>
    <br>
    <a href="../../TP1.php">Volver al TP1</a>
</body>
</html>