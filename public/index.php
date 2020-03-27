<?php

include_once __DIR__ . '/../autoload.php';
include_once __DIR__ . '/../app/support/Route.php';
include_once __DIR__ . '/../app/config/config.php';
$routes = include_once __DIR__ . '/../app/config/routes.php';

use App\Support\Route;


$requestRoute = trim($_SERVER["REQUEST_URI"], '/');

if (isset($routes[$requestRoute])) {
    $route = new Route($routes[$requestRoute]);
    $route->call();
} else {
    include __DIR__ . '/404.phtml';
}
