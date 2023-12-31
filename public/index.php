<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use app\core\Application;

    $app = new Application();


    $app->router->get('/',function(){ // router is a variable inside of the application class which is an objet from class of router
        return "This is the index page";
    });

    $app->router->get('/contact',function(){ // router is a variable inside of the application class which is an objet from class of router
        return "This is the contact Page";
    });


    $app->router->get('/features',function(){ // router is a variable inside of the application class which is an objet from class of router
        return "This is the features Page";
    });
    // get is a method inside of router that checks what is after /

    $app->run();//is a method inside of application

    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
        switch ($action) {
            case 'login':
                include 'views/login.php';
                break;
            case 'register':
                include 'views/register.php';
                break;
            }
    }
    //else
    //    include('views/home.php');

?>