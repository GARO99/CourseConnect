<?php
use Libraries\BaseController;

class HorarioIdeal extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    

      public function Index(){
        $this->View("Layout/Dashboard/header");
        $this->View("Home/Horarioideal");
        $this->View("Layout/Dashboard/sidebar");   

        $this->View("Layout/Dashboard/footer");
        
        
    }
}