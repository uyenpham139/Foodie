<?php
    declare(strict_types = 1);
    include 'includes/pagecontroller-autoLoad.inc.php';

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $path = 'controllers/';
    $extension = ".contr.php";

    $name = 'home';
    if (strpos($url, 'login') !== false) {
        $page = new Login();
        $page->index();
    }
    else if (strpos($url, 'signup') !== false) {
        $page = new Signup();
        $page->index();
    }
    else if (strpos($url, 'home') !== false) {
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
    else if (strpos($url, 'profile') !== false) {
        $page = new Profile();
        $page->index();
    }
    else {
        $page = new Home();
        $page->index();
    }
?>

