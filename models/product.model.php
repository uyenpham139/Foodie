<?php
    class Product extends Dbh{
        
        public function getMenuItems() {
            $query = $this->connect()->prepare("SELECT * FROM menu");

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }

            $result = $query->get_result();
            $query->close();

            // Return the fetched data as an associative array
            $menuItems = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $menuItems[] = $row;  // Append each row to the menuItems array
            }

            return $menuItems;
        }

        protected function getProduct($item) {
            $query = $this->connect()->prepare("SELECT * FROM menu WHERE LOWER(item_name) LIKE ?");
            $item = '%' . strtolower($item) . '%';
        
            $query->bind_param("s", $item);
        
            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
        
            $result = $query->get_result();
            $query->close();
            
            $productData = [];

            if(!$result->num_rows > 0) {
                $query = null;
                $_SESSION['product_not_found'] = true;
            }
            
            else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $productData[] = $row;
                }
            }            
            return $productData; // Return the fetched product data
        }
    }
?>

