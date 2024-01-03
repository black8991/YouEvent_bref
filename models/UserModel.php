<?php

namespace app\models;
use app\config\Database;
class UserModel
{
    public int $id_user ;
    public string $fullName= '';
    public string $email =  '';
    public string $phone = '';
    public string $password = '';
    private Database $database;
    public function __construct()
    {
        $this->database = new Database();
    }
    public function getUsers()
    {
        $stmt = $this->database->prepare("SELECT * FROM Eventment");
        $stmt->execute();
        $user = $stmt->fetchAll(\PDO::FETCH_OBJ); 
        if($user)
        {
            return $user;
        }
        else
            return false;
          
    }
 
    public function creatAcount($fullName,$email,$phone,$password)
    {
        $sql = "INSERT INTO `users` (`fullName`,`email`,`phone`,`password`) VALUES (?, ?, ?, ?)";
        $conn = $this->connect->getConnection();
    
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $fullName, PDO::PARAM_STR);
            $stmt->bindParam(2, $email, PDO::PARAM_STR);
            $stmt->bindParam(3, $phone, PDO::PARAM_STR);
            $stmt->bindParam(4, $password, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $stmt->closeCursor();
            $conn = null;
        }
        
    }
 
    
}