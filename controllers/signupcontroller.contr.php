<?php

class SignupController {
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $repeatPassword;

    public function __construct($firstname, $lastname, $email, $password, $repeatPassword) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->repeatPassword = $repeatPassword;
    }

    // Check whether the input is empty
    private function emptyInput() {
        // Check if these inputs are empty
        if(empty($this->firstname) || empty($this->lastname) 
            || empty($this->email) || empty($this->password) 
            || empty($this->repeatPassword) ) {
                return false;
        }
        return true;
    }

    // Check validity
    private function invalidName() {
        if(!preg_match('/[a-zA-Z]/', $this->firstname) || !preg_match("a-zA-Z", $this->lastname)) {
            return false;
        }
        return true;
    }

    private function invalidEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    private function validatePassword() {
        // Check password length
        if(strlen($this->password) < 8) {
            return false;
        }

        // Check at least one uppercase
        if(!preg_match('/[A-Z]/', $this->password) || !preg_match('/[0-9]/', $this->password)) {
            return false;
        }
        return true;
    }

    private function passwordMatch() {
        if($this->password !== $this->repeatPassword) {
            return false;
        }
        return true;
    }

}