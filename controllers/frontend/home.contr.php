<?php

class Home {
    public function index() {
        require_once 'views/components/head.php';
        require_once 'views/components/modal.php';
        require_once 'views/components/nav.php';
        require_once 'views/home.php';
        require_once 'views/about.php';
        require_once 'views/components/footer.php';
    }
}