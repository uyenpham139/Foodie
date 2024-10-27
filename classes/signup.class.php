<?php

class Signup extends Dbh {
    
    protected function checkUser($email) {
        $query = $this->connect()->prepare("SELECT email FROM users WHERE email = ?;");
        
        // Check fail executing
        if(!$query->execute($email)) {
            $query = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = true;
        if($query->num_rows() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

}