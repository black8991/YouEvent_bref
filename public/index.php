<?php

    require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use app\contollers\AdminController;
use app\controllers\Autentification;
use app\controllers\UserController;
use app\core\Application;


// dirname(__DIR__)  this is to grap the root path in order to acces to view absolutly
    $app = new Application(dirname(__DIR__));

    $app->router->get('/',[UserController::class, 'showData']);

    $app->router->get('/login', 'login');
    $app->router->get('/details', [UserController::class, 'showDetails']);
    // $app->router->get('/details', 'details');

    $app->router->get('/register','register');
    $app->router->post('/register', [Autentification::class, 'register']);

    $app ->router->get('/admin', [AdminController::class, 'admin']);
    $app ->router->post('/admin', [AdminController::class, 'admin']);


    // get is a method inside of router that checks what is after /
    $app->run();//is a method inside of application


