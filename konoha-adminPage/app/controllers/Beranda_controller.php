<?php 

class Beranda_controller extends Controllers {
    public function index() {
        $data['title'] = 'Admin - Beranda';

        $data['berandaNav'] = 'flex items-center gap-2 p-2 mt-2 rounded-lg bg-white text-gray-800 font-semibold';
        $data['penggunaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['beritaNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';
        $data['profilNav'] = 'flex items-center gap-2 p-2 mt-2 group hover:bg-white/50 hover:text-slate-800 rounded-lg transition';

        $this->view('templates/header', $data);
        $this->view('beranda/index', $data);
        $this->view('templates/footer');
    }
}

?>