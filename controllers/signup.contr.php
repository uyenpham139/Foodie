<?php

class Signup {
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
}