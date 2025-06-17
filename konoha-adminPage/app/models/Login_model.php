<?php  

class Login_model {
    private $conn;
    private $table_name = "";

    public function __construct() {
        $this->conn = new Database();
    }

    public function login() {
        
    }
}

?>