<?php

namespace App\core;
class Router {
    private $routes = [];

    public function add($method, $route, $action) {
        $this->routes[] = [
            'method' => strtoupper($method),
            'route' => trim($route, '/'),
            'action' => $action
        ];
    }

    public function dispatch() {
        $requestUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $requestMethod = $_SERVER['REQUEST_METHOD'];



        
        foreach ($this->routes as $route) {
            if ($route['route'] === $requestUri && $route['method'] === $requestMethod) {
                [$controller, $method] = explode('@', $route['action']);

                $namespace = (strpos($requestUri, 'admin') === 0) ? "App\\controllers\\back\\" : "App\\controllers\\front\\";


                $controllerClass = $namespace . $controller;

                
                if (class_exists($controllerClass) && method_exists($controllerClass, $method)) {
                    $controllerInstance = new $controllerClass();
                    return $controllerInstance->$method();
                } else {
                    http_response_code(404);
                    echo "404 - Page Not Found?";
                    return;
                }
            }
        }

        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
