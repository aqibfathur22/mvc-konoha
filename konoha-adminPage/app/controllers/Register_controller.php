<?php 

class Register_controller extends Controllers{
    public function index(): void{
        $data['register'] = $this->model('Register_model')->register();

        $this->view("register/index", $data);
    }
}

?>