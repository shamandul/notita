<?php

require_once "./vendor/autoload.php";

use Shm\Notita\Routes\Routes;

$uri = $_SERVER['REQUEST_URI'];
echo $uri;

$routes = [
    '/'=> 'Shm\Notita\Controllers\HomeController',
    '/contacto'=> 'Shm\Notita\Controllers\ContactoController',
];

new Routes($routes[$uri], "index");
