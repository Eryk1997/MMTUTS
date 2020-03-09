<?php

spl_autoload_register('autoLoad');

function autoLoad($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    $extension = '.cla.php';
    require_once $path . strtolower($className) . $extension;
}

?>