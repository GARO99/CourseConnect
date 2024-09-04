<?php
use Libraries\BaseController;

class SignIn extends BaseController {

    public function Index(){
        $this->View("Auth/SignIn");
    }
}
?>