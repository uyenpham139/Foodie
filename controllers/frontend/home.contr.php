<?php

class Home {
    public function index() {
        require_once 'views/partials/head.php';
        require_once 'views/partials/nav.php';
        require_once 'views/home.php';
        require_once 'views/about.php';
        require_once 'views/contact.php';
        require_once 'views/partials/footer.php';
    }
}