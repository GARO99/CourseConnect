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
        echo("<h1>HOME<h1>");
    }
}
?>