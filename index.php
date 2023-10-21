<?php

require_once "./vendor/autoload.php";

use Shm\Notita\Routes\Routes;
use Shm\Notita\Controllers\HomeController;

$uri = $_SERVER['REQUEST_URI'];
echo $uri;

$routes = [
    '/'=> 'Shm\Notita\Controllers\HomeController',
    '/contacto'=> 'Shm\Notita\Controllers\ContactoController',
];

// new Routes($routes[$uri], "index");
new Routes("/", HomeController::class, "index");
