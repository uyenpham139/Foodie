<?php

class Profile {
    // Display interface
    public function index() {
        require_once 'views/partials/head.php';
        require_once 'views/partials/nav.php';
        require_once 'views/profile.php';
        require_once 'views/partials/footer.php';
    }
}