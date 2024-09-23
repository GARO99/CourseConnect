<?php
use Libraries\BaseController;

class IndexRegister extends BaseController {

      public function Index(){
        $this->View("Auth/RegisterForm");      
    }
}
