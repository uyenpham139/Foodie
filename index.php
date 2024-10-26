<?php
    declare(strict_types = 1);
    include 'includes/controller-autoLoad.inc.php';

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $path = 'controllers/';
    $extension = ".contr.php";

    $name = 'home';
    if (strpos($url, 'login') !== false) {
        $page = new Login();
        $page->index();
    }
    if (strpos($url, 'home') !== false) {
        $page = new Home();
        $page->index();
    }
    else if (strpos($url, 'menu') !== false) {
        $page = new Menu();
        $page->index();
    }
    else if (strpos($url, 'about') !== false) {
        $page = new About();
        $page->index();
    }
    else if (strpos($url, 'contact') !== false) {
        $page = new Contact();
        $page->index();
    }
    else {
        $page = new Home();
        $page->index();
    }
    // add comment to test 

    //add sth
?>

