<?php
    class Product extends Dbh{
        
        public function getMenuItems($type) {
            $query = "SELECT * FROM menu";
            $params = [];

            // Determine the flag based on the type
            if ($type === 'breakfast') {
                $query .= " WHERE breakfast_flag = 1";
            } elseif ($type === 'lunch') {
                $query .= " WHERE lunch_flag = 1";
            } elseif ($type === 'dinner') {
                $query .= " WHERE dinner_flag = 1";
            } elseif ($type === 'drinks') {
                $query .= " WHERE drinks_flag = 1";
            }

            $stmt = $this->connect()->prepare($query);
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
        
            $result = $stmt->get_result();
            $stmt->close();
        
            // Fetch results into an array
            $menuItems = [];
            while ($row = $result->fetch_assoc()) {
                $menuItems[] = $row;
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

