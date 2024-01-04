<?php
namespace app\controllers;
use app\core\Application;
use app\core\Request;
use app\core\Router;
use app\models\LoginModel;

class Autentification extends  UserController {

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['fullname']) && !empty($_POST['email']))
            {
                
                $fullName = $_POST['fullname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $fullName = $this->validation($fullName);
                $email = $this->validation($email);
                $phone = $this->validation($phone);
                $password = password_hash($password, PASSWORD_DEFAULT);
                $user = new LoginModel();
                $res = $user->creatAcount($fullName, $email, $phone, $password);
                return $this->router->renderView("login", ['user' => $res]);
            }
            else
            {
                echo "<p class='alert alert-danger'>There was an error</p>";
                return $this->router->renderView("register");

            }
        }
    }


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $email = $this->validation($email);
            $password = $this->validation($password);
            $user = new LoginModel();
            $res = $user->findAcount($email, $password);
            var_dump($res);

        }

    }



    public function validation($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);

        return $data;
    }
}









