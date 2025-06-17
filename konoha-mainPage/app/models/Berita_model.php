<?php 

class Berita_Model {
    private $conn;
    private $table_name = "tb_berita";
    
    public function __construct() {
        $this->conn = new Database();
    }

    public function getBerita() {

        $query = "SELECT * FROM " . $this->table_name . " ORDER BY tanggal_berita ASC limit 5";
            
        $this->conn->query($query);
        return $this->conn->getAll();

    }

    public function getBeritaById($id_berita) {
        
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_berita = :id_berita";
        $this->conn->query($query);

        $this->conn->bindParam(':id_berita', $id_berita);
        
        return $this->conn->get();
    }
}

?>