<?php  

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'charlottechristmas_projetfinal');
define('DB_HOST', 'localhost:8889');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\FrontController@home');
$router->get('posts/:id', 'App\Controllers\FrontController@articlereview');
$router->get('/posts', 'App\Controllers\FrontController@pagereviewdynamique');
$router->get('/contact', 'App\Controllers\FrontController@contact');
$router->get('/about', 'App\Controllers\FrontController@about');
$router->get('/indexdrama', 'App\Controllers\FrontController@indexdrama');

$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/logout', 'App\Controllers\UserController@logout');

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