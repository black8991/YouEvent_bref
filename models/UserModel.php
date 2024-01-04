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

        $users = $stmt->fetchAll(\PDO::FETCH_OBJ); 
       
        if($users)
        {
            return $users;
        }
        else
            return false;
          
    }
 
    public function creatAcount()
    {
        $sql = "INSERT INTO `users` (`fullName`,`email`,`phone`,`password`) VALUES (?, ?, ?, ?)";
        $conn = $this->connect->getConnection();
    
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $this.fullName, PDO::PARAM_STR);
            $stmt->bindParam(2, $this.email, PDO::PARAM_STR);
            $stmt->bindParam(3, $this.phone, PDO::PARAM_STR);
            $stmt->bindParam(4, $this.password, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $stmt->closeCursor();
            $conn = null;
        }
        
    }

    

    public function getEventDetails($id)
    {
        $stmt = $this->database->prepare("SELECT
        e.id_event,
        e.name AS event_name,
        e.location,
        e.date,
        e.description,
        e.image,
        t.ticket_type,
        t.prix AS ticket_price
        FROM
            eventment e
        JOIN
            typetickets t ON e.id_event = t.id_event
        WHERE
            e.id_event = 1;
    ");

    
        $stmt->execute();
        $users = $stmt->fetch(\PDO::FETCH_OBJ); 
        
        if($users)
        {
            return $users;
        }
        else
            return false;
    }

    public function RegisterUser($table, $attributes, $values)
    {
        $newAtt = implode(',', $attributes);
        $newVal = implode("','", $values);
        $register = "INSERT INTO {$table} ({$newAtt}) VALUES ('{$newVal}')";
        $stmt = $this->database->prepare($register);
        $stmt->execute();
        return $stmt;
    }

}