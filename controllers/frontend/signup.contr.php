<?php

class Signup {
    // Display interface
    public function index() {
        require_once 'views/partials/head.php';
        require_once 'views/partials/modal.php';
        require_once 'views/partials/nav.php';
        require_once 'views/signup.php';
        require_once 'views/partials/footer.php';
    }
}