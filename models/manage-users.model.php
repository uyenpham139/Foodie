<?php

    class Users extends Dbh{
        
        protected function getUser($username) {
            $query = $this->connect()->prepare("SELECT user_id FROM users WHERE username=?");

            $query->bind_param("sssi", $email, $password, $email);

            $query->execute();

        }

        protected function updateUser($email, $password, $phoneNumber) {
            $query = $this->connect()->prepare("UPDATE users SET username=?, user_password=?, email=? WHERE user_id=?");

            $query->bind_param("sssi", $email, $password, $email);
        }

        protected function deleteUser($username, $password, $userLevel, $phoneNumber) {
            $query = "UPDATE users SET username = ':username', user_password = ':pwd', user_level = ':usr_level'
                        WHERE id = ";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$username, $password, $userLevel, $phoneNumber]);
        }

    }

?>