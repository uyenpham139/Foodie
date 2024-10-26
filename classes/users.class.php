<?php

    class Users extends Dbh{
        
        protected function getUser($username) {
            $query = "SELECT * FROM users WHERE username = :username";

            $stmt = $this->connect()->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->execute();

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function setUser($username, $password, $userLevel, $phoneNumber) {
            $query = "INSERT INTO users(usersname, user_password, user_level) VALUES(:username, :pwd, :usr_level)";

            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$username, $password, $userLevel, $phoneNumber]);
        }

        protected function updateUser($username, $password, $userLevel, $phoneNumber) {
            $query = "UPDATE users SET username = ':username', user_password = ':pwd', user_level = ':usr_level'
                        WHERE id = ";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([$username, $password, $userLevel, $phoneNumber]);
        }

    }

?>