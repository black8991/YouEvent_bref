<?php
namespace app\contollers;
use app\config\Database;
use app\models;
use PDO;

class AdminController{
    public function __construct(){
        $this->admin_controller= new AdminModel;
    }
    

}




?>