<?php
use Libraries\BaseController;

class Detall_asig extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    

      public function Index(){
        $this->View("Home/Detall_asig");
        $this->View("Layout/Dashboard/sidebarAdmin");   
        $this->View("Layout/Dashboard/header");
        $this->View("Layout/Dashboard/footer");
         
    }
}