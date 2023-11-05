<?php

$router = new AltoRouter();

$router->map('GET', '/', 'Home#getHome');
$router->map('GET', '/home', 'Home#getHome');
$router->map('GET', '/users', 'UserController#index');
$router->map('GET', '/users/[i:id]', 'Home#show');

$match = $router->match();

return $router;
