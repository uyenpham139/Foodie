<?php
if(isset($_POST['submit'])) {

    // Grabbing the data
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    // Instantiate Login class
    include "../classes/dbh.class.php";
    include "../classes/login.class.php";
    include "../controllers/logincontroller.contr.php";
    $login = new LoginController($username, $password);

    // Running error handlers and user login
    $login->loginUser();

    // Going back to front page
    header("location: ../index.php?error=none");
}

?>