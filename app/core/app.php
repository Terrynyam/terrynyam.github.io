<?php 
class App 
{
    private $controller = "listproduct";//home controller
    private $method = "index";//home controller method
    private $params = [];
    //constructor
    public function __construct()
    {
        //echo "app class";
        $url = $this->splitUrl();
        
        if(file_exists("../app/controllers/". strtolower($url[0] .".php")))
        {
            $this->controller =strtolower($url[0]);
            unset($url[0]);
        }
        require "../app/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = array_values($url);
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    //method to split url
    private function splitUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "listproduct";
        return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
    }
}