<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'charlottechristmas_projet');
define('DB_HOST', 'localhost:8889');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

$router = new Router($_GET['url']);

$router-> get('/', 'App\Controllers\FrontController@home');
$router-> get('posts/:id', 'App\Controllers\FrontController@articlereview');
$router-> get('/posts', 'App\Controllers\FrontController@pagereview');
$router->get('/categories/:id', 'App\Controllers\FrontController@category');

$router->get('/admin/posts', 'App\Controllers\Admin\BackController@index');
$router->get('/admin/posts/create', 'App\Controllers\Admin\BackController@create');
$router->post('/admin/posts/create', 'App\Controllers\Admin\BackController@createPost');
$router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\BackController@delete');
$router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\BackController@edit');
$router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\BackController@update');

try{
$router->run(); 
} catch(NotFoundException $e){
    return $e->error404();
}