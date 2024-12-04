<?php
use Libraries\BaseController;

class Profile extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    

      public function Index(){
        $this->View("Layout/Dashboard/header");v
        $this->View("Home/Profile");
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
