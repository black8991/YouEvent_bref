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
                $user->creatAcount($fullName, $email, $phone, $password);
                $this->router->redirect("/login");
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
            if(!empty($_POST['email']) && !empty($_POST['password']))
            {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $email = $this->validation($email);
                $password = $this->validation($password);
                $user = new LoginModel();
                $res = $user->findAcount($email, $password);

                if($res == "Admin")
                {
                    $this->router->redirect("admin");
                }
                else
                {
                   return "You Are Not Allowed";
                }
            }else
            {
                echo "<p class='alert alert-danger'>There was an error</p>";
                return $this->router->renderView("login");
            }
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









