<?php
    /**
     * Función de encapsulamiento de métodos $_POST, $_GET y $FILES
     * @return array
     */
    function data_submitted() {
        $aux = array();
        if(!empty($_POST)) {
            $aux = $_POST;
        }elseif(!empty($_GET)){
            $aux = $_GET;
        }

        if(!empty($_FILES)) {
            $aux = array_merge($aux,$_FILES);
        }

        if(count($aux)) {
            foreach($aux as $indice => $valor){
                if($valor == ""){
                    $aux[$indice] = null;
                }
            }
        }
        return $aux;
    }
 
    spl_autoload_register(function($class) {
        //echo "Cargamos la clase " .$clase."<br>";
        $directorys = array(
            $_SESSION['ROOT'].'Modelo/TP4/',
            $_SESSION['ROOT'].'Modelo/TP4/Conector/',
            $_SESSION['ROOT'].'Controlador/TP4/'
          //$GLOBALS['ROOT'].'util/class/',
        );
        foreach($directorys as $directory) {
            if(file_exists($directory.$class.'.php')) {
                //echo "se incluyo".$directory.$class. '.php';
                require_once($directory.$class.'.php');
                return;
            }
        }
    });
?>
