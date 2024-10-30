<?php

    class Users extends Dbh{
        
        protected function getUserId($username) {
            $query = $this->connect()->prepare("SELECT user_id FROM users WHERE username=?");

            $query->bind_param("s", $username);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=profile&error=queryfailed");
                exit();
            }
    
            $result = $query->get_result();
            $query->close();

            if(!$result->num_rows > 0) {
                $query = null;
                header("location: ../index.php?page=profile&error=wrongusername");
                exit();
            }
    
            $user_id = $result->fetch_all(MYSQLI_ASSOC);
            return $user_id;
        }

        protected function updateUser($email, $password, $phoneNumber) {
            $user_id = $this->getUserId($email);
            $query = $this->connect()->prepare("UPDATE users SET username=?, user_password=?, email=?, phone_no=? WHERE user_id=?");

            $query->bind_param("ssssi", $email, $password, $email, $phoneNumber, $user_id);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=profile&error=queryfailed");
                exit();
            }

            $query = null;
        }

        protected function deleteUser($username, $password, $userLevel, $phoneNumber) {
            $query = $this->connect()->prepare("DELETE FROM users WHERE user_id=?");
            $query->bind_param("i", $user_id);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=profile&error=queryfailed");
                exit();
            }
            
            $query = null;
        }
    }
?>