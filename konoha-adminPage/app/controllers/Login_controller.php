<?php 

class Login_controller extends Controllers {
    public function index(): void{
        $data['login'] = $this->model('Login_model')->login();

        $this->view("login/index", $data);
    }
}

?>