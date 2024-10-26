<?php

    class Product extends Dbh{
        
        protected function getProduct($name) {
            $sql = "SELECT * FROM users WHERE users_firstname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function setProduct($firstname, $lastname, $dob) {
            $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES(?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $dob]);
        }

    }

?>