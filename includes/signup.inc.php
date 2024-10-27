<?php

if(isset($_POST['submit'])) {

    // Grabbing the data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $repeatPassword = $_POST["repwd"];

    // Instantiate Signup class
    include "../views/signup.php";
    include "../controllers/signup.contr.php";
    $signup = new SignupController($firstname, $lastname, $email, $password, $repeatPassword);


}