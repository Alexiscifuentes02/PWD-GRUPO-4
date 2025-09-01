<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado de la Calculadora</title>
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
        .operacion {
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
        <h2>Resultado de la Operación</h2>
        
        <div class="operacion">
            <?php 
            if ($operacion === 'radicacion') {
                echo "{$numero2}√{$numero1} = " . number_format($resultado, 2);
            } else {
                echo "{$numero1} {$simbolo} {$numero2} = " . number_format($resultado, 2);
            }
            ?>
        </div>
        
        <div class="detalles">
            <p><strong>Operación:</strong> <?php echo Calculadora::obtenerNombre($operacion); ?></p>
            <p><strong>Número 1:</strong> <?php echo $numero1; ?></p>
            <p><strong>Número 2:</strong> <?php echo $numero2; ?></p>
            <p><strong>Resultado:</strong> <?php echo number_format($resultado, 2); ?></p>
        </div>
        
        <a href="../controlador/E7_controlador.php" class="volver">Volver a la calculadora</a>
    </div>
    <br>
    <a href="../../TP1.php">Volver al TP1</a>
</body>
</html>