<?php 

class Berita_model {
    private $conn;
    private $table_name = "tb_berita";

    public function __construct() {
        $this->conn = new Database();
    }

    public function create($data) {

        try {
            $gambarBerita = null;
            if (!empty($_FILES['gambar']['name'])) {
                $gambarBerita = $this->upload();
                if (!$gambarBerita) {
                    return false;
                }
            }

            $judulBerita = htmlspecialchars(strip_tags($data['judul']));
            $deskripsiBerita = htmlspecialchars(strip_tags($data['deskripsi']));
            
            $query = "INSERT INTO " . $this->table_name . "
                    (gambar, judul, deskripsi)
                    VALUES (:gambar, :judul, :deskripsi)";

            $this->conn->query($query);

            // Bind parameters
            $this->conn->bindParam(":gambar", $gambarBerita);
            $this->conn->bindParam(":judul", $judulBerita);
            $this->conn->bindParam(":deskripsi", $deskripsiBerita);

            $this->conn->execute();
            return $this->conn->rowCount();
        } catch (Exception $e) {
            header("Location: " . BASEURL . "/Error_controller");
        }       
    }

    public function upload() {       
        try {
            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name']; 

                    //cek apakah tidak ada gambar yang diupload
            if( $error === 4 ) {
                echo "<script>
                        alert('pilih gambar terlebih dahulu!');
                    </script>";
                return false;
            }

            //cek apakah yang diupload adalah gambar
            $formatGambarValid = ['jpg', 'jpeg', 'png'];
            $formatGambar = explode('.', $namaFile);
            $formatGambar = strtolower(end($formatGambar));
            if( !in_array($formatGambar, haystack: $formatGambarValid) ) {
                echo "<script>
                        alert('yang anda upload bukan gambar!');
                    </script>";
                return false;
            }

            //cek jika ukuran gambar terlalu besars
            if( $ukuranFile > 2000000 ) {
                echo "<script>
                        alert('ukuran gambar terlalu besar!');
                    </script>";
                return false;
            }

            //lolos pengecekan, gambar siap diupload
            //generate nama gambar baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $formatGambar;
            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/konoha/images/berita/' . $namaFileBaru;

            if (!move_uploaded_file($tmpName, $uploadPath)) {
                echo "<script>alert('Upload gagal: tidak bisa simpan ke folder img!');</script>";
                return false;
            }

            return $namaFileBaru;
        } catch (Exception $e) {
            header("Location: " . BASEURL . "/Error_controller");
        }
    }    
}

?>