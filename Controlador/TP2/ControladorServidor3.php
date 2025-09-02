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
}

