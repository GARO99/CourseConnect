<?php
use Libraries\BaseController;

class Home extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    

      public function Index(){
        $this->View("Layout/Dashboard/header");
        $this->View("Home/Home");
        switch($_SESSION['session']['userData']['role']){
          case 'Administrador':
            $this->View("Layout/Dashboard/sidebarAdmin");
            break;
          case 'Profesor':
            $this->View("Layout/Dashboard/sidebarProf");
            break;
          case 'Estudiante':
            $this->View("Layout/Dashboard/sidebar");
            break;
        }

        $this->View("Layout/Dashboard/footer");
        
        
    }
}
