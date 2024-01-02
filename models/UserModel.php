<?php

namespace app\models;
use app\config\Database;

class UserModel
{
    private Database $database;
    public function __construct()
    {
        $this->database = new Database();
    }
    public function getUsers()
    {
        $stmt = $this->database->prepare("SELECT * FROM Eventment");
        $stmt->execute();
        $user = $stmt->fetchAll(\PDO::FETCH_OBJ);  // Fetch as associative array
        if($user)
        {
            return $user;
        }
        else
            return false;
    }
}