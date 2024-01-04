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
        $data = [
            'fullname' => trim($_POST['fullname']),
            'email' => trim($_POST['email']),
            'phone' => trim($_POST['phone']),
            'password' => trim($_POST['password']),
            'passwordConfirm' => trim($_POST['passwordConfirmation'])
        ];

        if(!empty($data['fullname']) && !empty($data['email']) && !empty($data['phone'])
            && !empty($data['password']) && !empty($data['passwordConfirm']) )
        {
            $res = $this->userModel->RegisterUser("users", ['fullName', 'email', 'phone', 'password'], [$data['fullname'], $data['email'], $data['phone'], $data['password']]);
            $this->router->renderView("home", ['res' => $res]);
        }
    }

    public function login(): string
    {
        return "handling submitted data";
    }

    public function showData()
    {
        $users = $this->userModel->getUsers();
        if ($users) {
            return $this->router->renderView("home", ['users' => $users]);
        } else {
            return false;
        }
    }
    	
    public function showDetails(){
      
        $eventDetails = $this->userModel->getEventDetails($_GET['id']);
        
        if ($eventDetails) {
            return $this->router->renderView("details", ['eventDetails' => $eventDetails]);

        } else {
            return $this->router->renderView("not-found");
        }
    }
    


}
