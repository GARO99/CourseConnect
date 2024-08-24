<?php
use Libraries\BaseController;

class Error404 extends BaseController {

    public function Index(){
        $this->View("Error/404");
    }
}
?>