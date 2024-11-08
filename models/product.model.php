<?php

    class Product extends Dbh{
        
        protected function getProduct($name) {
            $query = $this->connect()->prepare("SELECT * FROM menu WHERE item_name = ?");

            $query->bind_param("ssssi", $email, $password, $email, $phoneNumber, $user_id);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }

            $result = $query->get_result();
            $query->close();

            if(!$result->num_rows > 0) {
                $query = null;
                header("location: ../index.php?page=menu&error=wrongusername");
                exit();
            }
    
            $user_id = $result->fetch_all(MYSQLI_ASSOC);
            return $user_id;
        }

    }

?>