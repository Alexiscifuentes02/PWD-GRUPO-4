<?php

class CalcularHoras {
    public static function validarHoras($horas) {
        $errores = [];
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
        
        foreach ($horas as $index => $dia) {
            $inicio = $dia['inicio'];
            $fin = $dia['fin'];
            if (empty($inicio) && empty($fin)) {
                continue;
            }
            
            if (empty($inicio) || empty($fin)) {
                $errores[] = $dias[$index] . ': Debe completar ambos campos.';
                continue;
            }
            
            if (!preg_match('/^([01][0-9]|2[0-3]):([0-5][0-9])$/', $inicio) || 
                !preg_match('/^([01][0-9]|2[0-3]):([0-5][0-9])$/', $fin)) {
                $errores[] = $dias[$index] . ': Formato de hora inválido.';
                continue;
            }
            
            if (strtotime($inicio) >= strtotime($fin)) {
                $errores[] = $dias[$index] . ': La hora de inicio debe ser anterior a la hora de fin.';
            }
        }
        
        return $errores;
    }
    
    public static function calcularTotalHoras($horas) {
        $totalMinutos = 0;
        
        foreach ($horas as $dia) {
            if (!empty($dia['inicio']) && !empty($dia['fin'])) {
                list($hInicio, $mInicio) = explode(':', $dia['inicio']);
                list($hFin, $mFin) = explode(':', $dia['fin']);
                
                $minutosInicio = (int)$hInicio * 60 + (int)$mInicio;
                $minutosFin = (int)$hFin * 60 + (int)$mFin;

                $totalMinutos += ($minutosFin - $minutosInicio);
            }
        }
        
        $horas = floor($totalMinutos / 60);
        $minutos = $totalMinutos % 60;
        
        return [
            'horas' => $horas,
            'minutos' => $minutos,
            'total_minutos' => $totalMinutos
        ];
    }
}

?>