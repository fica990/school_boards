<?php

include_once __DIR__ . '/../vendor/autoload.php';
$routes = include_once __DIR__ . '/../app/config/routes.php';

use App\Support\Route;

$requestRoute = trim($_SERVER["REQUEST_URI"], '/');

$args = explode('/', $requestRoute);
$route = $args[0];
$params = $args[1];

if (isset($routes[$route])) {
    $newRoute = new Route($routes[$route]);
    $newRoute->setParams($params);
    $newRoute->call();
} else {
    include __DIR__ . '/404.phtml';
}
