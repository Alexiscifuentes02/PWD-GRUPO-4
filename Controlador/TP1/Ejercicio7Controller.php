<?php
// Controlador para Ejercicio 7
// Recibe datos por POST o GET, calcula y redirige a la vista de resultados.

$num1 = $_REQUEST['numero1'] ?? '';
$num2 = $_REQUEST['numero2'] ?? '';
$oper = $_REQUEST['operacion'] ?? '';

$resultado = '';
if ($num1 !== '' && $num2 !== '' && $oper !== '') {
    switch ($oper) {
        case 'SUMA':
            $resultado = $num1 + $num2;
            break;
        case 'RESTA':
            $resultado = $num1 - $num2;
            break;
        case 'MULTIPLICACION':
            $resultado = $num1 * $num2;
            break;
    }
}

// Pasar datos a la vista por query string
$query = http_build_query([
    'numero1'   => $num1,
    'numero2'   => $num2,
    'operacion' => $oper,
    'resultado' => $resultado
]);

header("Location: /PWD-GRUPO-4/vista/TP1/Action7.php?$query");
exit;
