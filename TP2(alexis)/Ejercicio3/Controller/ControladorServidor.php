<?php
class ControladorLogin {

    private $usuarios = [
        ["usuario" => "aaaa", "clave" => "1111aaaa"],
        ["usuario" => "bbbb", "clave" => "2222bbbb"],
        ["usuario" => "cccc", "clave" => "3333cccc"],
        ["usuario" => "dddd", "clave" => "4444dddd"]
    ];

    public function validarLogin($data) {
        $usuarioIngresado = $data['usuario'] ?? '';
        $claveIngresada   = $data['clave'] ?? '';

        $i = 0;
        $encontrado = false;
        $total = count($this->usuarios);

        if ($total > 0) {
            do {
                $user = $this->usuarios[$i];
                if ($user["usuario"] === $usuarioIngresado && $user["clave"] === $claveIngresada) {
                    $encontrado = true;
                }
                $i++;
            } while ($i < $total && !$encontrado);
        }

        return $encontrado;
    }
}
