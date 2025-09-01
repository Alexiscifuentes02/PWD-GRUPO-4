<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado del cálculo de horas</title>
    <style>
        .resultado {
            margin: 20px;
            padding: 20px;
            border: 1px solid #4CAF50;
            background-color: #f9f9f9;
            border-radius: 5px;
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
        <h2>Resultado del cálculo de horas</h2>
        <?php if (isset($total)): ?>
            <p>Total de horas de cursada: <strong><?php echo $total['horas']; ?> horas y <?php echo $total['minutos']; ?> minutos</strong></p>
            <p>En minutos totales: <?php echo $total['total_minutos']; ?> minutos</p>
        <?php endif; ?>
        
        <a href="../controlador/E2_controlador.php" class="volver">Volver al formulario</a>
    </div>
    <br>
    <a href="../../TP1.php">Volver al TP1</a>
</body>
</html>