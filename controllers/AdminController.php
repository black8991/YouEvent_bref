<?php
namespace app\controllers;
use app\config\Database;
use app\models\AdminModel;
use  app\core\Router;
use  app\core\Request;
use PDO;

class AdminController{
    private AdminModel $admin_controller;
    private Router $router;


    public function __construct(){
        $request = new Request();
        $this->admin_controller= new AdminModel;
        $this->router = new Router($request);
        
    }
    public function admin(){
        $data = $this->admin_controller->showUsers("users");
        return $this->router->renderView("dashboardadmin", ['data' => $data]);
    }


}




?>