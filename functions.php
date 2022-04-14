<?php

    //funzione per richiamare i componenti

    function get_template_part($file, $params) {
        ob_start();
        extract($params);
        require $file;
        $text = ob_get_clean();
        echo $text;
    }

    function get_template_text($file, $params) {
        ob_start();
        extract($params);
        require $file;
        $text = ob_get_clean();
        return $text;
    }


?>