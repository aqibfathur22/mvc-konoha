<?php 

class Profil_controller extends Controllers {
    public function index() {
        $data['title'] = "Admin - Profil";

        $data['berandaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['penggunaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['beritaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['profilNav'] = 'flex items-center gap-2 p-2 mt-2 rounded-lg bg-white text-gray-800 font-semibold';

        $this->view("templates/header", $data);
        $this->view("profil/index", $data);
        $this->view("templates/footer");

        publiv function updateProfil() {
            if ($this->model('Profil_Model')->update($_POST) > 0) {
                header("Location: " . BASEURL . "/profil");
                exit;
            }
        }
    }
}

?>