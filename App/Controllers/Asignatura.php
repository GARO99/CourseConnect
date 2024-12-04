<?php
use Libraries\BaseController;

class Asignatura extends BaseController {

    public function __construct(){
        session_start();
        if (!$_SESSION['session']['login']) {
          header('location:'.RUTURL);
        }
      }
    

      public function Index(){
        $this->View("Layout/Dashboard/header");
        switch($_SESSION['session']['userData']['role']){
            case 'Profesor':
              $this->View("Home/AsignaturaProf");
              $this->View("Layout/Dashboard/sidebarProf");
              break;
            case 'Estudiante':
              $this->View("Home/Asignatura");
              $this->View("Layout/Dashboard/sidebar");
              break;
          }

        $this->View("Layout/Dashboard/footer");
        
        
    }
}
