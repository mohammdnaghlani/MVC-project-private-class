<?php
use Core\Request;
use RouterService\Router;

$router = new Router(new Request) ;

$router->get('/' , 'information');
$router->post('/login-user' , 'information');
$router->post('/forms' , 'information');