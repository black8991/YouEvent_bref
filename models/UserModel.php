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
        $users = $stmt->fetchAll(\PDO::FETCH_OBJ); 
       
        if($users)
        {
            return $users;
        }
        else
            return false;
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
}