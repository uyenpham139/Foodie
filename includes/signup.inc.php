<?php
if(isset($_POST['submit'])) {

    // Grabbing the data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone-no"];
    $password = $_POST["pwd"];
    $repeatPassword = $_POST["repwd"];

    // Instantiate Signup class
    include "../models/dbh.model.php";
    include "../classes/signup.model.php";
    include "../controllers/backend/signupcontroller.contr.php";
    $signup = new SignupController($firstname, $lastname, $email, $phone_no, $password, $repeatPassword);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}

?>