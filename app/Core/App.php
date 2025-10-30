<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();
        if (!empty($url[0]) && file_exists('../app/Controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require_once '../app/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

      
        if (!empty($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

     
        $this->params = $url ? array_values($url) : [];

    
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [];
    }


//     public function __construct() {

//         $url = $_GET['url'];
//         //  $url = rtrim($url, '/');
//         //  $url = filter_var($url, FILTER_SANITIZE_URL);
//          $url = explode('/', $url);
//         var_dump($url);
//         die;
        
//     }
 }
