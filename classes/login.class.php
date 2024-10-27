<?php

class Login extends Dbh {

    protected function getUser($username, $pwd) {
        $query = $this->connect()->prepare("SELECT user_password FROM users WHERE username = ?;");

        $query->bind_param("s", $username);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?page=login&error=queryfailed");
            exit();
        }

        if($query->num_rows() == 0) {
            // print($username);
            // print($pwd);
            // print($query->get_result());
            $query = null;
            header("location: ../index.php?page=login&error=usernotfound");
            exit();
        }

        $pwdHashed = $query->get_result()->fetch_all(MYSQLI_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["user_password"]); // Return true = same OR false

        if($checkPwd == false) {
            $query = null;
            header("location: ../index.php?page=login&error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true) {
            $query = $this->connect()->prepare("SELECT * FROM users WHERE username = ? AND user_password;");

            $query->bind_param("ss", $username, $pwd);
            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=login&error=queryfailed");
                exit();
            }

            if($query->num_rows() == 0) {
                $query = null;
                header("location: ../index.php?page=login&error=usernotfound");
                exit();
            }

            $user = $query->get_result()->fetch_all(MYSQLI_ASSOC);
            session_start();
            $_SESSION["userid"] = $user[0]["user_id"];
            $_SESSION["username"] = $user[0]["username"];

            $query = null;
        }
        $query = null;
    }
    
    protected function checkUser($email) {
        $query = $this->connect()->prepare("SELECT email FROM users WHERE email = ?");
        $query->bind_param('s', $email);

        $query->execute();

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?page=login&error=queryfailed");
            exit();
        }

        $resultCheck = true;
        if($query->num_rows() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}