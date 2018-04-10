<?php

namespace App\Core\Services;

use Couchbase\Exception;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

//    public function define($routes)
//    {
//        $this->routes = $routes;
//    }
    public static function load ($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function direct ($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
//            return $this->routes[$requestType][$uri]

            return $this->callAction(
                ... explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No routes defined for this URI');
    }

    public function callAction ($controller, $method )
    {
        $controller = "App\Controllers\\{$controller}";

        $controller = new $controller;

        if (! method_exists($controller, $method)) {
            throw new Exception("Controller {$controller} don't have {$method} method");
        }
        return $controller-> $method();
    }

    public function get($uri, $controller) {
        $this->routes['GET']["$uri"] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST']["$uri"] = $controller;
    }
}