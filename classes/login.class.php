<?php

class Login extends Dbh {

    protected function getUser($username, $pwd) {

        $query = $this->connect()->prepare("SELECT user_password FROM users WHERE username=?;");

        $query->bind_param("s", $username);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?page=login&error=queryfailed");
            exit();
        }

        $result = $query->get_result();
        $query->close();

        if(!$result->num_rows > 0) {
            $query = null;
            header("location: ../index.php?page=login&error=usernotfound");
            exit();
        }

        $user = $result->fetch_all(MYSQLI_ASSOC);
        $checkPwd = password_verify($pwd, $user[0]["user_password"]); // Return true = same OR false

        if($checkPwd == false) {
            $query = null;
            header("location: ../index.php?page=login&error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true) {
            $query = null;
            $query = $this->connect()->prepare("SELECT * FROM contact_info WHERE email=?;");

            $query->bind_param("i", $username);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=login&error=queryfailed");
                exit();
            }

            $result = $query->get_result();
            $query->close();

            if($result->num_rows == 0) {
                $query = null;
                header("location: ../index.php?page=login&error=usernotfound");
                exit();
            }

            $user = $result->fetch_all(MYSQLI_ASSOC);
            
            // Send COOKIE
            if(isset($_REQUEST['remember-me'])){
                setcookie("username", $username, time() + 20);
                setcookie("password", $pwd, time() + 20);
            }
            session_start();
            $_SESSION["userid"] = $user[0]["user_id"];
            $_SESSION["username"] = $user[0]["email"];
            $_SESSION["firstname"] = $user[0]["firstname"];
            $_SESSION["lastname"] = $user[0]["lastname"];

            $query = null;
        }
        $query = null;
    }
}