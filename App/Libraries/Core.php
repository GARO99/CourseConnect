<?php
namespace Libraries;

class Core {
    protected $controller="SignIn";
    protected $method="Index";
    protected $parameter=[];

    public function __construct(){
        $url = $this->geturl();

        if(!empty($url)){
            if (file_exists("../App/Controllers/".ucwords($url[0]).".php")) {
                $this->controller = ucwords($url[0]);
                unset($url[0]);
            }
        }

        require_once "../App/Controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        if (isset($url[1])) {
          if(method_exists($this->controller,$url[1])){
            $this->method = $url[1];
            unset($url[1]);
          }
        }

        $this->parameter=$url? array_values($url):[];
        call_user_func_array(
          array($this->controller,$this->method),$this->parameter);
    }
    
    public function geturl(){
        if (isset($_GET["url"])) {
            $url=rtrim($_GET["url"],"/");
            $url=filter_var($url,FILTER_SANITIZE_URL);
            $url=explode("/",$url);
            return $url;
        }
    }
}
?>