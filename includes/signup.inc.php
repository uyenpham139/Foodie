<?php
if(isset($_POST['submit'])) {

    // Grabbing the data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $repeatPassword = $_POST["repwd"];

    // Instantiate Signup class
    include "../classes/dbh.class.php";
    include "../classes/signup.class.php";
    include "../controllers/signupcontroller.contr.php";
    $signup = new SignupController($firstname, $lastname, $email, $password, $repeatPassword);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}

?>