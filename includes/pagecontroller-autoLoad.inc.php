<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader ($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../controllers/pages/';
    }
    else {
        $path = 'controllers/pages/';
    }
    $extension = '.contr.php';
    require_once $path . $className . $extension;
}

?>