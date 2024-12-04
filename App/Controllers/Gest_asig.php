<?php
use Libraries\BaseController;

class Gest_asig extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    

      public function Index(){
        $this->View("Home/Gest_asig");
        $this->View("Layout/Dashboard/sidebarAdmin");   
        $this->View("Layout/Dashboard/header");
        $this->View("Layout/Dashboard/footer");
        
        
    }
}