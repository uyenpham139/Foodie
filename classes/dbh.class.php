<?php 

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "235meii13092004";
    private $dbName = "foodiedb";

    // Containing the connection to the actual database
    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        // Create a PDO connection
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } 

}