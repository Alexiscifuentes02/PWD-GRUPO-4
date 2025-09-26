<?php
session_start();
$tituloPagina = "TP 1 - Ejercicio 1";

/* Clase mínima para obtener el número desde GET o POST */
class NumeroRequest {
    private ?float $numero;
    public function __construct() {
        $valor = $_POST['numero_form'] ?? $_GET['numero_form'] ?? null;
        $this->numero = is_numeric($valor) ? (float)$valor : null;
    }
    public function get(): ?float { return $this->numero; }
}

$req = new NumeroRequest();
$numero = $req->get();

// Procesar el número
if ($numero === null) {
    $mensaje = "⚠ NO SE RECIBIERON DATOS!!!";
    $clase   = "text-danger";
} elseif ($numero > 0) {
    $mensaje = "✅ El número <b>{$numero}</b> es positivo";
    $clase   = "text-success";
} elseif ($numero < 0) {
    $mensaje = "❌ El número <b>{$numero}</b> es negativo";
    $clase   = "text-danger";
} else {
    $mensaje = "⚠ El número es cero";
    $clase   = "text-warning";
}

// Guardar datos en sesión
$_SESSION['mensaje'] = $mensaje;
$_SESSION['clase'] = $clase;

// Redirigir a la vista
header("Location: ../../vista/TP1/Action1.php");
exit;
