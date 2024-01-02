<?php

    require_once __DIR__ . '/../vendor/autoload.php';


    use app\core\Application;

    $app = new Application();

    $app->router->get('/','home');

    $app->router->get('/login', 'login');


    $app->router->get('/register','register');
    // get is a method inside of router that checks what is after /

    $app->run();//is a method inside of application

    // if(isset($_GET['action']))
    // {
    //     $action = $_GET['action'];
    //     switch ($action) {
    //         case 'login':
    //             include 'views/login.php';
    //             break;
    //         case 'register':
    //             include 'views/register.php';
    //             break;
    //         }
    // }
    //else
    //    include('views/home.php');

