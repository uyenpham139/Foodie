<?php 

class Dbh {

    private $username = 'root';
    private $password = '235meii13092004';
    private $host = 'localhost';
    private $db = 'foodie';
    protected $mysqli;

    protected function connect() {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->mysqli -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli -> connect_error;
            exit();
        }
        return $this->mysqli;
    }

}

