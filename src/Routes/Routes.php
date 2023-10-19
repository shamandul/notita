<?php
namespace Shm\Notita\Routes;

class Routes
{
    public function __construct($controller, $method)
    {
        $mostrar = new $controller();
        $mostrar->$method();
    }
}
