<?php
use Libraries\BaseController;

class SignIn extends BaseController {

    public function Index(){
        $this->View(
            "Auth/SignIn",
            [
                "assets/css/auth/sing_in/test.css",
                "Inicia Sesion"
            ]
        );
    }
}
?>