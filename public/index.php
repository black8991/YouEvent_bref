<?php

    require_once __DIR__ . '/../vendor/autoload.php';
session_start();

use app\controllers\UserController;
use app\controllers\AdminController;
use app\core\Application;
use app\Router;


// dirname(__DIR__)  this is to grap the root path in order to acces to view absolutly
    $app = new Application(dirname(__DIR__));
    $app->router->get('/','home');
    $app->router->get('/',[UserController::class, 'showData']);


    // $app->router->get('/login', 'login');
    // $app->router->get('/details', [new AutentificationController, 'showDetails']);
    // // $app->router->get('/details', 'details');

    // $app->router->get('/register','register');
    // $app->router->post('/register', [new AutentificationController ,'register']);

    $app ->router->post('/admin', [AdminController::class, 'admin']);
    $app ->router->get('/admin', [AdminController::class, 'admin']);
    $app ->router->post('/delete', [AdminController::class, 'supprimer']);
    $app ->router->get('/delete', [AdminController::class, 'supprimer']);






    // get is a method inside of router that checks what is after /
    $app->run();//is a method inside of application


