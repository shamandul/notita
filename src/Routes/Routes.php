<?php
namespace Shm\Notita\Routes;

use stdClass;

class Routes
{
    protected $routes = [];
    // public function __construct($controller, $method)
    // {
    //     $mostrar = new $controller();
    //     $mostrar->$method();
    // }
    public function get($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller'=> $controller,
            'method' => 'GET'

        ];
    }
    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller'=> $controller,
            'method' => 'POST'

        ];
    }
    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller'=> $controller,
            'method' => 'DELETE'

        ];
    }
    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller'=> $controller,
            'method' => 'PATCH'

        ];
    }
    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller'=> $controller,
            'method' => 'PUT'

        ];
    }
    public function route($uri)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                return new $route['controller']();
            }
        }
    }
}
