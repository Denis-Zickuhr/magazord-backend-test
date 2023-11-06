<?php

$router = new AltoRouter();

$router->map('GET', '/', 'HomeController#index');
$router->map('GET', '/home', 'HomeController#index');
$router->map('GET', '/users', 'PersonController#index');
$router->map('GET', '/users-new', 'PersonController#show');
$router->map('GET', '/users-edit-[i:id]', 'PersonController#show');
$router->map("POST", '/users-edit-[i:id]', 'PersonController#edit');
$router->map("POST", '/users-new', 'PersonController#create');
$router->map("GET", '/users-delete-[i:id]', 'PersonController#delete');

$router->map('GET', '/contacts', 'ContactController#index');
$router->map('GET', '/contacts-edit-[i:id]', 'ContactController#show');
$router->map('GET', '/contacts-new', 'ContactController#show');
$router->map("POST", '/contacts-edit-[i:id]', 'ContactController#edit');
$router->map("POST", '/contacts-new', 'ContactController#create');
$router->map("GET", '/contacts-delete-[i:id]', 'ContactController#delete');

$match = $router->match();

return $router;
