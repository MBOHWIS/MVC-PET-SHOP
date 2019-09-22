<?php
class App
{
    public $controller = "HomeController";
    public $action = 'Index';
    public $params = [];

    public function __construct()
    {

        $url = $this->parseUrl();
        if (file_exists('app/controllers/' . $url[0] . 'Controller.php')) {
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }
        require_once('app/controllers/' . $this->controller . '.php');
        
        $this->controller = new $this->controller;
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            }
        }
        if (!empty($url)) {
            $this->params = array_values($url);
        }
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
