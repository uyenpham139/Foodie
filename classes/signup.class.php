<?php

class Signup extends Dbh {

    protected function setUser($email, $pwd) {
        $query = $this->connect()->prepare("INSERT INTO users(username, user_password, date_created, last_login, email) VALUES(?, ?, NOW(), NOW(), ?);");

        $username = $email;
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        $query->bind_param("sss", $username, $hashedPwd, $email);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?error=queryfailed");
            exit();
        }

        $query = null;
    }
    
    protected function checkUser($email) {
        $query = $this->connect()->prepare("SELECT email FROM users WHERE email=?");
        $query->bind_param("s", $email);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?error=queryfailed");
            exit();
        }

        $result = $query->get_result();
        $query->close();

        $resultCheck = true;
        if($result->num_rows > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}