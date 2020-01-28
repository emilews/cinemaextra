<?php
    function url_for($script_path){
        //Agrega la '/' si no la trae
        if ($script_path[0] != '/') {
            $script_path = '/' . $script_path;
        }
        return WWW_ROOT . $script_path;
    }
?>
