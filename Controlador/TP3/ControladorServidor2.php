<?php
class ControladorServidor2 {

    public function validarArchivo($archivo) {
        $mensaje = "EXITO";

        if (!isset($archivo) || $archivo['error'] !== UPLOAD_ERR_OK) {
            $mensaje = "ERROR!! No se pudo subir el archivo";
        } else {
            $directorio = __DIR__ . "/../../Vista/TP3/Uploads/";

            if (!is_dir($directorio)) {
                mkdir($directorio, 0777, true);
            }

            $rutaDestino = $directorio . basename($archivo['name']);

            $tiposValidos = ["text/plain"];

            if (!in_array($archivo['type'], $tiposValidos)) {
                $mensaje = "ERROR!! Tipo de archivo inválido";
            }

            if ($archivo['size'] > 2 * 1024 * 1024) {
                $mensaje = "ERROR!! Tamaño superado";
            }
        }

        if ($mensaje === "EXITO") {
            if (!move_uploaded_file($archivo["tmp_name"], $rutaDestino)) {
                $mensaje = "ERROR!! No se pudo mover el archivo";
            }
        }

        return $mensaje;
    }
}
?>
