<?php
////////////////////////////////  
//   CONFIGURACION PROYECTO   //
////////////////////////////////

$PROYECTO = 'PWD';

// Ruta absoluta al directorio raíz del proyecto
$ROOT = __DIR__ . "/";

// Guardamos en sesión para que el autoload lo pueda usar
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['ROOT'] = $ROOT;

//////////////////////////////// 
//   FUNCIONES Y AUTOLOAD    //
//////////////////////////////// 
include_once($ROOT . 'Util/Funciones.php');
