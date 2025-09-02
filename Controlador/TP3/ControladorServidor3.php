<?php
class ControladorFormulario {

    public function validarFormulario($post, $files) {
        $resultado = [
            "datos"   => $post,
            "estado"  => "ok",
            "errores" => [],
            "imagen"  => null
        ];


        $camposObligatorios = [
            "titulo"       => "El título es obligatorio.",
            "actores"      => "Los actores son obligatorios.",
            "director"     => "El director es obligatorio.",
            "guion"        => "El guion es obligatorio.",
            "produccion"   => "La producción es obligatoria.",
            "anio"         => "El año es obligatorio.",
            "nacionalidad" => "La nacionalidad es obligatoria.",
            "genero"       => "El género es obligatorio.",
            "duracion"     => "La duración es obligatoria.",
            "restriccion"  => "Debe elegir una restricción de edad.",
            "sinopsis"     => "La sinopsis es obligatoria."
        ];

        foreach ($camposObligatorios as $campo => $mensaje) {
            if (empty(trim($post[$campo] ?? ""))) {
                $resultado["estado"] = "error";
                $resultado["errores"][] = $mensaje;
            }
        }

        // Validación Año
        if (!empty($post['anio']) && (!is_numeric($post['anio']) || strlen($post['anio']) != 4)) {
            $resultado["estado"] = "error";
            $resultado["errores"][] = "El año debe tener 4 dígitos.";
        }

        // Validación Duración
        if (!empty($post['duracion']) && (!is_numeric($post['duracion']) || $post['duracion'] <= 0)) {
            $resultado["estado"] = "error";
            $resultado["errores"][] = "La duración debe ser un número mayor que 0.";
        }


        $archivo = $files['archivo'] ?? null;

        if (!isset($archivo) || $archivo['error'] !== UPLOAD_ERR_OK) {
            $resultado["estado"] = "error";
            $resultado["errores"][] = "Debe seleccionar una imagen.";
        } else {
            $carpetaRelativa = "../../Vista/TP3/Uploads/"; 
            $directorioServidor = __DIR__ . "/../../Vista/TP3/Uploads/";

            // Crear carpeta si no existe
            if (!is_dir($directorioServidor)) {
                mkdir($directorioServidor, 0777, true);
            }

            $nombreArchivo = uniqid("img_") . "_" . basename($archivo['name']);
            $rutaDestino = $directorioServidor . $nombreArchivo;

            // Validar tipo y tamaño
            $tiposValidos = ["image/jpg", "image/jpeg", "image/png"];
            if (!in_array($archivo['type'], $tiposValidos)) {
                $resultado["estado"] = "error";
                $resultado["errores"][] = "El archivo debe ser JPG o PNG.";
            } elseif ($archivo['size'] > 2 * 1024 * 1024) {
                $resultado["estado"] = "error";
                $resultado["errores"][] = "La imagen no puede superar los 2MB.";
            } else {
                // Mover archivo
                if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                    $resultado["imagen"] = $carpetaRelativa . $nombreArchivo;
                } else {
                    $resultado["estado"] = "error";
                    $resultado["errores"][] = "No se pudo subir la imagen.";
                }
            }
        }

        return $resultado;
    }
}
?>
