<?php
namespace app\models;
use app\config\Database;
use PDO;


class AdminModel {
    private Database $database;
    public function __construct()
    {
        $this->database = new Database();
    }

    public function showUsers($table){
        $showrequete= $this->database->prepare("select * from (`{$table}`)");
        $showrequete->execute();
        $data = $showrequete->fetchAll();
        return $data;
 }
     public function delete($table, $id_user){
        $deleterequete= $this->database->prepare("DELETE FROM `{$table}` WHERE id_user= '$id_user' ");
        // var_dump($deleterequete);
        // // die();
        $deleterequete->execute();
     }

     public function insert($table, $attributes, $values){
        $arrtimploded= implode(",",$attributes );
        $valuesimploded= implode(",",$values);
        $insertrequete= $this->database->prepare("INSERT INTO {$table}{$arrtimploded} VALUES {$valuesimploded}");
        $insertrequete->execute();
     }
    
  

}




?>