<?php
session_start();

// Clase para encapsular GET o POST
class HorasRequest {
    private array $datos = [];

    public function __construct() {
        $dias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
        foreach ($dias as $dia) {
            $valor = $_POST[$dia] ?? $_GET[$dia] ?? 0;
            $this->datos[$dia] = is_numeric($valor) ? (int)$valor : 0;
        }
    }

    public function getDatos(): array {
        return $this->datos;
    }

    public function getTotal(): int {
        return array_sum($this->datos);
    }
}

$req = new HorasRequest();
$horas = $req->getDatos();
$total = $req->getTotal();

// Guardar en sesión para que Action2.php pueda mostrarlo
$_SESSION['horas'] = $horas;
$_SESSION['total'] = $total;

// Redirigir a la vista Action2.php
header("Location: ../../vista/TP1/Action2.php");
exit;
