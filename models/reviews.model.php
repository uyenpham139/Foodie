<?php
    class Reviews extends Dbh{
        
        public function getNoReviews($menuId) {
            $query = "SELECT COUNT(*) AS total_rows FROM reviews WHERE menu_id = ?";
            $stmt = $this->connect()->prepare($query);

            $stmt->bind_param("i", $menuId);
            
            if(!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
        
            $result = $stmt->get_result();
            $stmt->close();
        
            $count = $result->fetch_assoc();
            return $count;
        }

        public function getReviews($menuId) {
            $query = $this->connect()->prepare("SELECT * FROM reviews WHERE menu_id = ?");
            $query->bind_param('i', $menuId);

            if(!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
        
            $result = $query->get_result();
            $query->close();
        
            // Fetch results into an array
            $reviews = [];
            while ($row = $result->fetch_assoc()) {
                $reviews[] = $row;
            }
        
            return $reviews;
        }

        public function getUsersInfo($userIds) {
            if (empty($userIds)) {
                return [];
            }
        
            // Create placeholders for IN clause based on the number of user IDs
            $placeholders = implode(',', array_fill(0, count($userIds), '?'));
        
            $query = "SELECT * FROM contact_info WHERE user_id IN ($placeholders)";
            $stmt = $this->connect()->prepare($query);
        
            // Bind the parameters dynamically
            $types = str_repeat('i', count($userIds)); // Assume all IDs are integers
            $stmt->bind_param($types, ...$userIds);
        
            if (!$stmt->execute()) {
                $stmt = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
        
            $result = $stmt->get_result();
            $stmt->close();
        
            // Return user info as an associative array keyed by user_id
            $usersInfo = [];
            while ($row = $result->fetch_assoc()) {
                $usersInfo[$row['user_id']] = $row;
            }
        
            return $usersInfo;
        }

        public function getRatingCount($menuId) {
            $query = $this->connect()->prepare("SELECT rating, COUNT(*) as count
                                                FROM reviews
                                                WHERE menu_id = ?
                                                GROUP BY rating
                                                ORDER BY rating DESC");
            $query->bind_param('i', $menuId);
        
            if (!$query->execute()) {
                $query = null;
                header("location: ../index.php?page=menu&error=queryfailed");
                exit();
            }
        
            $result = $query->get_result();
            $query->close();
        
            // Initialize array with all ratings from 1 to 5
            $ratingCount = [
                5 => 0,
                4 => 0,
                3 => 0,
                2 => 0,
                1 => 0,
            ];
        
            // Update counts from the query results
            while ($row = $result->fetch_assoc()) {
                $rating = (int)$row['rating'];
                $count = (int)$row['count'];
                $ratingCount[$rating] = $count; // Update the specific rating count
            }
        
            // Return the array as a list with descending keys for consistent structure
            return array_map(function($rating, $count) {
                return ['rating' => $rating, 'count' => $count];
            }, array_keys($ratingCount), $ratingCount);
        }
    }
?>

