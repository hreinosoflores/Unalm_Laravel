<?php
    function setActive($routeName){
        return request()->routeIs($routeName) ? 'active' : '';
    }
    //agregar lo siguiente en el archivo composer.josn
    //"files":["app/helpers.php"]
    //luego recargar el proyecto con $ composer dumpautoload

?>