<?php
    class Product extends Dbh{
        
        protected function getProduct($item) {
            $query = $this->connect()->prepare("SELECT * FROM menu WHERE LOWER(item_name) LIKE ?");
            $item = '%' . strtolower($item) . '%'; // Add wildcards for partial matching

            $query->bind_param("s", $item);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
    
            $result = $query->get_result();
            $query->close();

            if(!$result->num_rows > 0) {
                $query = null;
                $_SESSION['product_not_found'] = true;
                header("location: ../index.php");
                exit();
            }
            
            else {
                // Display table of product (This is just temporary)
            echo '<thead>
            <tr>
            <th>Dish</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            </thead>';

            $row = mysqli_fetch_assoc($result);
            echo '<tbody>
            <tr>
            <td>'.$row['item_name'].' </td>
            <td>'.$row['description'].' </td>
            <td>'.$row['category'].' </td>
            <td>'.$row['price'].' </td>
            <tr/>
            </tbody>';
            }
            
        }

        protected function setProduct($firstname, $lastname, $dob) {
            $sql = "INSERT INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES(?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $dob]);
        }

    }

?>

