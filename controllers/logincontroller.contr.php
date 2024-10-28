<?php

class LoginController extends Login{
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser() {
        
        if($this->emptyInput() == false) {
            header("location: ../index.php?page=login&error=emptyinput");
            exit();
        }
        
        if($this->invalidUsername() == false) {
            header("location: ../index.php?page=login&error=email");
            exit();
        }
        
        if($this->validatePassword() == false) {
            header("location: ../index.php?page=login&error=invalidpassword");
            exit();
        }

        $this->getUser($this->username, $this->password);
    }

    // Check whether the input is empty
    private function emptyInput() {
        $result = true;
        // Check if these inputs are empty
        if(empty($this->username) || empty($this->password)) {
            $result = false;
        }
        else $result = true;
        return $result;
    }

    private function invalidUsername() {
        $result = true;
        if(!filter_var($this->username, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }

    private function validatePassword() {
        $result = true;
        // Check password length
        if(strlen($this->password) < 8) {
            $result = false;
        }

        // Check at least one uppercase
        if(!preg_match('/[A-Z]/', $this->password) || !preg_match('/[0-9]/', $this->password)) {
            $result = false;
        }
        return $result;
    }    
}