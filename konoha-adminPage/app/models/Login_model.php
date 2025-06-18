<?php  

class Login_model {
    private $conn;
    private $table_name = "log_admin";

    public function __construct() {
        $this->conn = new Database();
    }

    public function login($username, $password) {
        $this->conn->query("SELECT * FROM {$this->table_name} WHERE nama = :nama");
        $this->conn->bindParam(":nama", $username);
        $user = $this->conn->get();

        if ($username === $user['nama'] && $password === $user['password']) {
            return $user;
        }

        return false;
    }
}

?>