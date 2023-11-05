<?php

use App\Controller\Pages\NotFound;

require 'vendor/autoload.php';
require 'App/Controller/Pages/NotFound.php';

$router = require 'routes.php';



$match = $router->match();

if ($match) {
    list($controller, $action) = explode('#', $match['target']);
    $controller = 'App\\Controller\\Pages\\' . $controller;

    $controllerInstance = new $controller();
    call_user_func_array([$controllerInstance, $action], $match['params']);
} else {
    $controllerInstance = new NotFound();
    $controllerInstance::getNotFound();
}
