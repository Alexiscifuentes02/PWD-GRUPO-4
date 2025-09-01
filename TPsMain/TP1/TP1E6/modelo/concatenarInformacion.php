<?php

class NivelEstudio {
    public static function obtenerMensaje($estudios) {
        switch ($estudios) {
            case "noEstudios":
                return "No tengo ni primario ni secundario completos.";
            case "primarios":
                return "Tengo primario completo.";
            case "secundarios":
                return "Tengo primario y secundario completo.";
            default:
                return "Nivel de estudios no especificado.";
        }
    }
}

class Genero {
    public static function obtenerMensaje($genero) {
        switch ($genero) {
            case "hombre":
                return "Soy de género masculino.";
            case "mujer":
                return "Soy de género femenino.";
            case "otro":
                return "Soy de otro género.";
            default:
                return "Género no especificado.";
        }
    }
}

class Deportes {
    public static function obtenerMensaje($deportes) {
        $cantidad = count($deportes);
        
        if ($cantidad === 0) {
            return "No practico ningún deporte.";
        } elseif ($cantidad === 1) {
            return "Practico 1 deporte: " . self::formatearDeportes($deportes) . ".";
        } else {
            return "Practico $cantidad deportes: " . self::formatearDeportes($deportes) . ".";
        }
    }
    
    private static function formatearDeportes($deportes) {
        $nombres = [
            'futbol' => 'fútbol',
            'basket' => 'básquet',
            'tennis' => 'tenis',
            'voley' => 'vóley'
        ];
        
        $deportesFormateados = [];
        foreach ($deportes as $deporte) {
            $deportesFormateados[] = $nombres[$deporte] ?? $deporte;
        }
        
        if (count($deportesFormateados) === 1) {
            return $deportesFormateados[0];
        } else {
            $ultimo = array_pop($deportesFormateados);
            return implode(', ', $deportesFormateados) . " y " . $ultimo;
        }
    }
}

class GeneradorMensaje {
    public static function generar($nombre, $apellido, $edad, $direccion, $estudios, $genero, $deportes) {
        $nivelDeEstudio = NivelEstudio::obtenerMensaje($estudios);
        $fraseGenero = Genero::obtenerMensaje($genero);
        $fraseDeportes = Deportes::obtenerMensaje($deportes);
        $esMenor = self::esMenorDeEdad($edad);
        
        return self::construirMensaje($nombre, $apellido, $edad, $direccion, $nivelDeEstudio, $fraseGenero, $fraseDeportes, $esMenor);
    }
    
    private static function esMenorDeEdad($edad) {
        return $edad < 18;
    }
    
    private static function construirMensaje($nombre, $apellido, $edad, $direccion, $nivelDeEstudio, $fraseGenero, $fraseDeportes, $esMenor) {
        $mensajeBase = "Hola, yo soy $nombre $apellido, tengo $edad años, ";
        
        if ($esMenor) {
            $mensajeBase .= "soy menor de edad, ";
        }
        
        $mensajeBase .= "y vivo en $direccion. $fraseGenero $fraseDeportes $nivelDeEstudio";
        
        return $mensajeBase;
    }
}

// Mantener la clase original para compatibilidad con el controlador existente
class ConcatenarInformacion {
    public static function generarMensaje($nombre, $apellido, $edad, $direccion, $estudios, $genero, $deportes) {
        return GeneradorMensaje::generar($nombre, $apellido, $edad, $direccion, $estudios, $genero, $deportes);
    }
}

?>