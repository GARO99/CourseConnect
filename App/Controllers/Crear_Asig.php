<?php
use Libraries\BaseController;

class Crear_Asig extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    
      public function Index(){
        $this->View("Home/Crear_Asig");
        $this->View("Layout/Dashboard/sidebarAdmin");   
        $this->View("Layout/Dashboard/header");
        $this->View("Layout/Dashboard/footer");
        
    }
}