<?php 

class Home_controller extends Controllers {
    public function index() {
        $data['title'] = "Konoha - Pengaduan";
        $data['kategori'] = $this->model('Pengaduan_model')->getKategori(); 
        $data['dataStatistik'] = $this->model('Statistik_model')->getStatistik($data);
        $data['berita'] = $this->model('Berita_model')->getBeritaAll();

        $this->view("templates/header", $data);
        $this->view("home/index", $data);
        $this->view("home/pengaduan", $data);   
        $this->view("home/berita", $data);
        $this->view("home/profil", $data);
        $this->view("home/footer", $data);
        $this->view("templates/footer");
    }    

    public function createPengaduan() {
        if ($this->model('Pengaduan_model')->create($_POST) > 0) {
            header("Location: " . BASEURL . "/home");
            exit;
        } 
    }
    
    public function detailBerita($id_berita) {
        $data['title'] = "Konoha - Pengaduan";
        $data['detailBerita'] = $this->model('Berita_model')->getBerita($id_berita);
        $data['berita'] = $this->model('Berita_model')->getSugestion($id_berita);

        $this->view("templates/header", $data);
        $this->view("home/detailBerita", $data);
        $this->view("templates/footer", );
    }
}

?>