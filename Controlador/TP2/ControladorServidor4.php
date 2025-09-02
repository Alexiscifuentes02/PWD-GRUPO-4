<?php
class ControladorFormulario {

    public function validarFormulario($post) {
        $resultado = [
            "datos"   => $post,
            "estado"  => "ok",
            "errores" => [],
        ];

        // Validaciones de campos obligatorios
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

        // Validación Duracion
        if (!empty($post['duracion']) && (!is_numeric($post['duracion']) || $post['duracion'] <= 0)) {
            $resultado["estado"] = "error";
            $resultado["errores"][] = "La duración debe ser un número mayor que 0.";
        }

        return $resultado;
    }
}
