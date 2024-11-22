<?php

class Profile {
    // Display interface
    public function index() {
        require_once 'views/components/head.php';
        require_once 'views/components/modal.php';
        require_once 'views/components/nav.php';
        require_once 'views/profile.php';
        require_once 'views/components/footer.php';
    }
}