<?php

class Login_controller extends Controllers {
    public function index(): void {
        if (isset($_POST['login'])) {
            $username = $_POST['nama'];
            $password = $_POST['password'];

            $user = $this->model('Login_model')->login($username, $password);

            if ($user) {
                // Set session
                session_start();
                
                $_SESSION['login'] = true;
                header('Location: ' . BASEURL . '/admin_beranda');
                exit;
            } else {
                $data['error'] = 'Username atau password salah.';
            }
        }

        $this->view('login/index', $data ?? []);
    }
}

?>