<?php
namespace app\contollers;
use app\core\Application;
use app\core\Request;
use app\core\Router;
use app\models\LoginModel;

class AutentificationController{

    public function regester(){
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='regester') {
            
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $fullName=$this->validation($fullName);
            $email=$this->validation($email);
            $phone=$this->validation($phone);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $user = new LoginModel();
            $user->creatAcount($fullName, $email,$phone,$password);
            if($user){
                include "login.php";
            }
           
           }}
    
           public function login($email,$password){
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit']=='regester') {
             $email = $_POST['email'];
             $password = $_POST['password'];
            $email=$this->validation($email);
            $password=$this->validation($password);
            $user = new LoginModel();
            $user->findAcount($email,$password);
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









