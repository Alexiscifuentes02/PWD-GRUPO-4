<?php
class ControladorServidor {

    public function validarFormulario($post) {
        $resultado = [
            "datos"   => $post,
            "estado"  => "ok",
            "errores" => [],
        ];

        // Campos obligatorios con sus mensajes de error
        $camposObligatorios = [
            "nombre"    => "El nombre es obligatorio.",
            "apellido"  => "El apellido es obligatorio.",
            "email"     => "El correo electrónico es obligatorio.",
            "password"  => "La contraseña es obligatoria.",
            "terminos"  => "Debe aceptar los términos y condiciones."
        ];

        // Validar campos vacíos
        foreach ($camposObligatorios as $campo => $mensaje) {
            if (empty(trim($post[$campo] ?? ""))) {
                $resultado["estado"] = "error";
                $resultado["errores"][] = $mensaje;
            }
        }

        // Validación de email
        if (!empty($post["email"]) && !filter_var($post["email"], FILTER_VALIDATE_EMAIL)) {
            $resultado["estado"] = "error";
            $resultado["errores"][] = "Debe ingresar un correo válido.";
        }

        // Validación de password (mínimo 6 caracteres)
        if (!empty($post["password"]) && strlen($post["password"]) < 6) {
            $resultado["estado"] = "error";
            $resultado["errores"][] = "La contraseña debe tener al menos 6 caracteres.";
        }

        return $resultado;
    }

    public function iniciarValidacion($datosFormulario){
        $resultado = null;
        if (!empty($datosFormulario)){
        $resultado = $this->validarFormulario($datosFormulario);
        return $resultado;
        }
    }
}
