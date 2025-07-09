<?php
namespace app\core;

class Router {
    public function dispatch() {
        $url = $_GET['url'] ?? 'home';
        $urlParts = explode('/', $url);
        
        $controllerName = 'app\\controllers\\' . ucfirst($urlParts[0]) . 'Controller';
        $method = $urlParts[1] ?? 'index';
        
        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            
            if (method_exists($controller, $method)) {
                $controller->$method();
                return;
            }
        }
        
        // Если страница не найдена
        $this->show404();
    }
    
    private function show404() {
        header("HTTP/1.0 404 Not Found");
        echo 'Страница не найдена';
        exit;
    }
}