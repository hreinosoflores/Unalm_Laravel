<?php

if (!function_exists('setActivo')) {
    function setActivo($route)
    {
        return request()->routeIs($route) ? 'active' : '';
    }
}

//agregar lo siguiente en el archivo composer.josn
//"files":["app/helpers.php"]
//luego recargar el proyecto con $ composer dumpautoload
