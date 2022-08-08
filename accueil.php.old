<?php

spl_autoload_register(function($class)
{
   require lcfirst(str_replace('\\', '/',$class)) . '.php';
   
});

if(array_key_exists('route', $_GET))
{
    switch($_GET['route'])
    {
        case 'home': 
            $controller = new Controllers\FrontController();
            $controller->displayHome();
            break;
        case 'index':
            $controller = new Controllers\FrontController();
            $controller->displayIndex();
            break;
        case 'reviews':
            $controller = new Controllers\FrontController();
            $controller->displayReviews();
            break;
        case 'review':
            $controller = new Controllers\FrontController();
            $controller->displayReview();
            break;
        case 'about':
            $controller = new Controllers\FrontController();
            $controller->displayAbout();
            break;
        case 'contact':
            $controller = new Controllers\FrontController();
            $controller->displayContact();
            break;

        case 'admin':
            $controller = new Controllers\FrontController();
            $controller->displayAdmin();
            break;
           
        default:
        header('Location: index.php?route=home');
        exit();
        break;
    }
} else {
    header('Location: index.php?route=home');
    exit();
}

