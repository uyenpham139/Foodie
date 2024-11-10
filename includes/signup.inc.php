<?php
if(isset($_POST['submit'])) {

    // Grabbing the data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone-no"];
    $password = $_POST["pwd"];
    $repeatPassword = $_POST["repwd"];
    $country = $_POST['countries']; 
    $state = $_POST['states'];    
    $city = $_POST['cities'];       

    

    // Instantiate Signup class
    include "../models/dbh.model.php";
    include "../models/signup.model.php";
    include "../controllers/backend/signupcontroller.contr.php";
    $signup = new SignupController($firstname, $lastname, $email, $phone_no, $password, $repeatPassword, $country, $state, $city);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}

?>