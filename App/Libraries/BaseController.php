<?php
namespace Libraries;

class BaseController {
    public function model($model){
        require_once "../App/Model/".$model.".php";
        return new $model;
    }

    public function view($view,$data=[]){
        if(file_exists("../App/View/".$view.".php")){
          require_once "../App/View/".$view.".php";
        }else {
          die("ERROR 404");
        }
    }
}

?>