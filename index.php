<?php

use Route\Router;

require '..vendor/autoload.php';

$router = new Router ($_GET['url']);

$router-> get('/', 'App\Controllers\FrontController@index');
$router-> get('posts/:id', 'App\Controllers\FrontController@show');
$router->run();