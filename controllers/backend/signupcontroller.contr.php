<?php

class SignupController extends Signup{
    private $firstname;
    private $lastname;
    private $email;
    private $phone_no;
    private $password;
    private $repeatPassword;
    private $country;
    private $state;
    private $city;

    public function __construct($firstname, $lastname, $email, $phone_no, $password, $repeatPassword, $country, $state, $city) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone_no = $phone_no;
        $this->password = $password;
        $this->repeatPassword = $repeatPassword;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
    }

    public function signupUser() {
        
        if($this->emptyInput() == false) {
            header("location: ../index.php?page=signup&error=emptyinput");
            exit();
        }
        
        if($this->invalidName() == false) {
            header("location: ../index.php?page=signup&error=invalidname");
            exit();
        }
        
        if($this->invalidEmail() == false) {
            header("location: ../index.php?page=signup&error=invalidemail");
            exit();
        }
        
        if($this->validatePassword() == false) {
            header("location: ../index.php?page=signup&error=invalidpassword");
            exit();
        }
        
        if($this->passwordMatch() == false) {
            header("location: ../index.php?page=signup&error=passwordmatch");
            exit();
        }
        
        if($this->userTaken() == false) {
            header("location: ../index.php?page=signup&error=usernameoremailtaken");
            exit();
        }

        $this->setUser($this->email, $this->password, $this->firstname, $this->lastname, $this->phone_no, $this->country, $this->state, $this->city);
    }

    // Check whether the input is empty
    private function emptyInput() {
        $result = true;
        // Check if these inputs are empty
        if(empty($this->firstname) || empty($this->lastname) 
            || empty($this->email) || empty($this->password) 
            || empty($this->repeatPassword) ) {
                $result = false;
        }
        else $result = true;
        return $result;
    }

    // Check validity
    private function invalidName() {
        $result = true;
        if(!preg_match('/[a-zA-Z ]/', $this->firstname) || !preg_match('/[a-zA-Z ]/', $this->lastname)) {
            $result = false;
        }
        else $result = true;
        return $result;
    }

    private function invalidEmail() {
        $result = true;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
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

    private function passwordMatch() {
        $result = true;
        if($this->password !== $this->repeatPassword) {
            $result = false;
        }
        return $result;
    }

    private function userTaken() {
        $result = true;
        if(!$this->checkUser($this->email)) {
            $result = false;
        }
        else $result = true;
        return $result;
    }
    
}