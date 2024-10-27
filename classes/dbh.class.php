<?php 

class Dbh {

    private $username = "root";
    private $password = "235meii13092004";
    private $host = "localhost";
    private $db = "foodie";

    protected function connect() {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try {
                $dbh = new mysqli($this->host, $this->username, $this->password, $this->db);
                return $dbh;
            } catch (Exception $e) {
                print "Error!: " . $e->getMessage() . "</br>";
                die(); // Kill the connection
            }
        }
        
    }

}