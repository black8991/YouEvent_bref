<?php



// UserController.php

namespace app\controllers;
use app\models\UserModel;
use app\core\Application;
use app\core\Request;
use app\core\Router;

class UserController
{
    public Router $router;
    public UserModel $userModel;

    public function __construct()
    {
        // Assuming you have a Request class
        $request = new Request();
        $this->router = new Router($request);
        $this->userModel = new userModel();
    }

    public function register()
    {
        $this->router->renderView("register");
    }

    public function login(): string
    {
        return "handling submitted data";
    }

    public function showData()
    {
        $users =  $this->userModel->getUsers();
        

    }


}
