<?php
class ControladorLogin {
    public function validarLogin($usuario,$clave) {
        $usuarios = [
            'admin' => 'Admin123',
            'usuario1' => 'Password1',
            'juan' => 'Juan1234',
            'maria' => 'Maria567',
            'pedro' => 'Pedro901'
        ];
    
        $login = false;

        if(array_key_exists($usuario, $usuarios)) {
            $login = $usuarios[$usuario] === $clave;
        }
    
        return $login;
    }

    public function darResultado($datosFormulario){
        $mensaje = "";
        $clase   = "";

        if(!empty($datosFormulario)){
            $usuario = $datosFormulario['usuario'] ?? '';
            $clave   = $datosFormulario['clave'] ?? '';

            $esValido = $this->validarLogin($usuario, $clave);

            if ($esValido) {
                $mensaje = "Login correcto, ¡Bienvenido!";
                $clase   = "success";
            } else {
                $mensaje = "Usuario o clave incorrectos";
                $clase   = "danger"; 
            }

             $resultado = [
                'mensaje'=> $mensaje,
                'clase'=> $clase
            ];

            return $resultado;
        }
    }
}

