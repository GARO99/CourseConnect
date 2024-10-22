<?php

use Libraries\BaseController;
use Services\RegisterService;

class Register extends BaseController {

    private $registerService;

    public function __construct() {
        $this->registerService = new RegisterService();
    }


    public function Index(){
        $this->View("Auth/RegisterForm");      
    }

    public function register() {
        try {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $roleId = (int)$_POST['role_id'];

            if (empty($email) || empty($password) || empty($roleId)) {
                throw new \Exception('Todos los campos son obligatorios.');
            }

            $this->registerService->registerUser($email, $password, $roleId);

            echo "Usuario registrado exitosamente.";
      
            header('location:'.RUTURL.'Home');

        } catch (\Exception $e) {
            echo "Error al registrar usuario: " . $e->getMessage();
        }
    }
}
?>
