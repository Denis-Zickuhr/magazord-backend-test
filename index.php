<?php
use App\Controller\NotFoundController;

require_once 'vendor/autoload.php';
require_once 'App/Controller/NotFoundController.php';

$router = require 'routes.php';

$match = $router->match();

if ($match) {
    list($controller, $action) = explode('#', $match['target']);
    $controller = 'App\\Controller\\' . $controller;

    $controllerInstance = new $controller;
    call_user_func_array([$controllerInstance, $action], $match['params']);
} else {
    $controllerInstance = new NotFoundController();
    $controllerInstance::index();
}
