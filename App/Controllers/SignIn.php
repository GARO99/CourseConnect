<?php
use Libraries\BaseController;
use Services\AuthService;

class SignIn extends BaseController {
    private $authService;

    public function __construct() {
        session_start();
        $this->authService = new AuthService();
        if (isset($_SESSION['session']['login'])) {
            header('location:'.RUTURL.'Home');
        } 
    }

    public function Index(){
        $this->View("Auth/SignIn");
    }

    public function login(){
        if (isset($_POST['rol']) && isset($_POST['email'])
            && isset($_POST['password'])
        ){
            $user = $this->authService->SignIn($_POST['email'],$_POST['rol'], $_POST['password']);
            $_SESSION['session']=[
                'userData' => $user,
                'login'=> TRUE
            ];
            header('location:'.RUTURL.'Home');
        } else {
            header('location:'.RUTURL);
        }
    }
}
?>