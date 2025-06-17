<?php 

class Berita_controller extends Controllers {
    public function index() {
        $data['title'] = "Admin - Berita";

        $data['berandaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['penggunaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['beritaNav'] = 'flex items-center gap-2 p-2 mt-2 rounded-lg bg-white text-gray-800 font-semibold';
        $data['profilNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';

        $this->view("templates/header", $data);
        $this->view("berita/index", $data);
        $this->view("templates/footer");
    }

    public function createBerita() {
        if ($this->model('Berita_Model')->create($_POST) > 0) {
            header("Location: " . BASEURL . "/berita");
            exit;
        }
    }
}
?>