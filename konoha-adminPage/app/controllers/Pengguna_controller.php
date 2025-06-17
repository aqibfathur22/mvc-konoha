<?php 

class Pengguna_controller extends Controllers {
    public function index() {
        $data['title'] = "Admin - Pengguna";

        $data['berandaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['penggunaNav'] = 'flex items-center gap-2 p-2 mt-2 rounded-lg bg-white text-gray-800 font-semibold';
        $data['beritaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['profilNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';

        $this->view("templates/header", $data);
        $this->view("pengguna/index", $data);
        $this->view("templates/footer");
    }
}

?>