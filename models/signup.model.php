<?php

class Signup extends Dbh {

    protected function setUser($email, $pwd, $firstname, $lastname, $phone_no, $country, $state, $city) {

        // Table users
        $query = $this->connect()->prepare("INSERT INTO users(username, user_password, user_level, date_created, last_login, email) VALUES(?, ?, 1, NOW(), NOW(), ?);");

        $username = $email;
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        $query->bind_param("sss", $username, $hashedPwd, $email);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?page=signup&error=queryfailed");
            exit();
        }

        // Table contact_info
        $userID = $query->insert_id;

        $query = $this->connect()->prepare("INSERT INTO contact_info(user_id, firstname, lastname, email, phone_no, country, province, city) VALUES(?, ?, ?, ?, ?, ?, ?, ?);");
        
        $query->bind_param("isssssss", $userID, $firstname, $lastname, $email, $phone_no, $country, $state, $city);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?page=signup&error=queryfailed");
            exit();
        }

        $query = null;
    }
    
    protected function checkUser($email) {
        $query = $this->connect()->prepare("SELECT email FROM users WHERE email=?;");
        $query->bind_param("s", $email);

        if(!$query->execute()) {
            $query = null;
            header("location: ../index.php?page=signup&error=queryfailed");
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