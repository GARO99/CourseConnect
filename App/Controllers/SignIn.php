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
            try {
                $user = $this->authService->SignIn($_POST['email'],$_POST['rol'], $_POST['password']);
                $userdata = array(
                    'id' =>$user->getId(),
                    'role' => $this->authService->GetRolName($user->getRoleId()),
                    'firstName'=>$user->getFirstName(),
                    'lastName'=>$user->getLastName(),
                    'email' => $user->getEmail()
                  );
          
                $_SESSION['session']=[
                    'userData' => $userdata,
                    'login'=> TRUE
                ];
                header('location:'.RUTURL.'Home');
            } catch (\Exception $e) {
                $_SESSION['error'] = [
                    'message' => $e->getMessage()
                ];
                header('location:'.RUTURL);
            }
        } else {
            header('location:'.RUTURL);
        }
    }

    public function logout(){
        unset($_SESSION['session']);
        header('location:'.RUTURL);
    }
}
?>