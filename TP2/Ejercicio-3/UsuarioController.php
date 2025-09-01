<?php

class UsuarioController{
    private $usuarios;

    public function __construct($usuarios){
        $this->usuarios = $usuarios;
        
    }

    public function getUsuarios(){
        return $this->usuarios;
    }

    public function setUsuarios($usuarios){
        $this->usuarios = $usuarios;
    }


    public function verificarUsuario($usuario, $password){
    $usuarios = $this->getUsuarios();
    $cantidadUsuarios = count($usuarios);
    $usuarioEncontrado = false;

    while($indice < $cantidadUsuarios && !$usuarioEncontrado){
        $condicion = $usuarios[$indice]['usuario'] === $usuario && $usuarios[$indice]['password'] === $password;

        if($condicion){
            $usuarioEncontrado = true;
        } else {
            $indice++;
        }
    }

    return $usuarioEncontrado;
}

}