<?php
namespace app\controllers;
use app\config\Database;
use app\models\AdminModel;
use  app\core\Router;
use  app\core\Request;
use PDO;

class AdminController{
    private AdminModel $objmodel;
    private Router $router;


    public function __construct(){
        $request = new Request();
        $this->objmodel= new AdminModel;
        $this->router = new Router($request);
        
    }
    public function admin(){
        $data = $this->objmodel->showUsers("users");
        return $this->router->renderView("dashboardadmin", ['data' => $data]);
    }
    public function supprimer(){
        $id = $_POST['id_user'];
        $test = $this->objmodel->delete("users", $id);

    }
    
    

}




?>