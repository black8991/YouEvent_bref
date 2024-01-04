<?php
namespace app\models;
use app\config\Database;
use PDO;


class AdminModel extends UserModel{

    public function showUsers($table, $attributes){
        $arrtimploded= implode(",",$attributes );
        $showrequete= $this->conndb->prepare("select {$arrtimploded} from {$table}");
        $showrequete->execute();
        $data = $showrequete->fetchAll();
        return $data;
 }
     public function delete($table, $condition){
        $deleterequete= $this->conndb->prepare("DELETE FROM {$table} WHERE {$condition}");
        $deleterequete->execute();
     }

     public function insert($table, $attributes, $values){
        $arrtimploded= implode(",",$attributes );
        $valuesimploded= implode(",",$values);
        $insertrequete= $this->conndb->prepare("INSERT INTO {$table}{$arrtimploded} VALUES {$valuesimploded}");
        $insertrequete->execute();
     }
    
  

}




?>