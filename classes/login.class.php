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

        $pwdHashed = $result->fetch_all(MYSQLI_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["user_password"]); // Return true = same OR false

        if($checkPwd == false) {
            $query = null;
            header("location: ../index.php?page=login&error=wrongpassword");
            exit();
        }
        elseif($checkPwd == true) {
            $query = $this->connect()->prepare("SELECT * FROM users WHERE username=?;");

            $query->bind_param("s", $username);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=login&error=queryfailed");
                exit();
            }

            $result = $query->get_result();
            $query->close();

            if($result->num_rows == 0) {
                $query = null;
                header("location: ../index.php?page=login&error=usernotfound2");
                exit();
            }

            $user = $result->fetch_all(MYSQLI_ASSOC);
            
            session_start();
            $_SESSION["userid"] = $user[0]["user_id"];
            $_SESSION["username"] = $user[0]["username"];

            $query = null;
        }
        $query = null;
    }
}