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
        .errores {
            margin: 20px;
            padding: 20px;
            border: 1px solid #f44336;
            background-color: #ffe6e6;
            border-radius: 5px;
            color: #d8000c;
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
    <?php if (!empty($errores)): ?>
        <div class="errores">
            <h2>Se encontraron errores:</h2>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif (isset($total)): ?>
        <div class="resultado">
            <h2>Resultado del cálculo de horas</h2>
            <p>Total de horas de cursada: 
                <strong><?php echo $total['horas']; ?> horas y 
                <?php echo $total['minutos']; ?> minutos</strong>
            </p>
            <p>En minutos totales: <?php echo $total['total_minutos']; ?> minutos</p>
        </div>
    <?php endif; ?>
    
    <a href="../../Vista/TP2/Ejercicio2.php" class="volver">Volver al formulario</a>
</body>
</html>
