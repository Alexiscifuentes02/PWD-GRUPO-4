<?php
session_start();

// Clase para encapsular GET o POST
class DatosRequest {
    private array $datos = [];

    public function __construct() {
        $campos = ["nombre", "apellido", "edad", "direccion"];
        foreach ($campos as $campo) {
            $valor = $_POST[$campo] ?? $_GET[$campo] ?? null;
            $this->datos[$campo] = $valor;
        }
    }

    public function getDatos(): array {
        return $this->datos;
    }

    public function todosRecibidos(): bool {
        return !in_array(null, $this->datos, true) && !in_array("", $this->datos, true);
    }
}

$req = new DatosRequest();
$datos = $req->getDatos();
$recibidos = $req->todosRecibidos();

// Guardar en sesión
$_SESSION['datos'] = $datos;
$_SESSION['recibidos'] = $recibidos;

// Redirigir a Action3.php
header("Location: ../../vista/TP1/Action3.php");
exit;
