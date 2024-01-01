<?php
require_once 'config/database.php';
class  EvenementsModel{
   
    private $name;
    private $location;
    private $date;
    private $description;
    private $imag;

    public function __construct()
    {  
         #make conictin to database

         $database = new Database('localhost', 'database', 'root', '');
           $pdo = $database->getPdo();
    }
        
   //function adding the event to table events by organisateur
   # input the function this argiment name,location,date,descriptioon,imag;

    public function AjouterEvent($name, $location, $date, $description, $imag)
    {
     
         #make varbele for query of insert
        $insert = "INSERT INTO Tickets (name, location, date, description, imag) VALUES (:name, :location, :date, :description, :imag)";
        #pase the valeus to preper function
        $query = $pdo->prepare($insert);
        #bind parameters to the values
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':location', $location, PDO::PARAM_STR);
        $query->bindParam(':date', $date, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':imag', $imag, PDO::PARAM_STR);
      #execet the query
      $query->execute();

   }

   public function SupprimerEvent($eventId)
   {
       
        #make varbele for query of delete
       $delete = "DELETE FROM Tickets WHERE id = :id";
         #pase the valeus to preper function
       $statement = $pdo->prepare($delete);
         #bind parameters to the values
       $statement->bindParam(':id', $eventId, PDO::PARAM_INT);
         #execet the query
       $statement->execute();
   }

   public function ModifierEvent($eventId, $name, $location, $date, $description, $imag)
   {
      
           #make varbele for query of update
       $update = "UPDATE Tickets SET name = :name, location = :location, date = :date, description = :description, imag = :imag WHERE id = :id";
         #pase the valeus to preper function
       $statement = $pdo->prepare($update);
          #bind parameters to the values
       //$statement->bindParam(':id', $eventId, PDO::PARAM_INT);
       $statement->bindParam(':name', $name, PDO::PARAM_STR);
       $statement->bindParam(':location', $location, PDO::PARAM_STR);
       $statement->bindParam(':date', $date, PDO::PARAM_STR);
       $statement->bindParam(':description', $description, PDO::PARAM_STR);
       $statement->bindParam(':imag', $imag, PDO::PARAM_STR);
          #execet the query
       $statement->execute();
   }

   public function getAllEvents()
   {
       global $pdo;
          #make varbele for query of select data of event
       $select = "SELECT * FROM Eventment";
          #pase the valeus to preper function
       $statement = $pdo->query($select);
        #make all rows as an associative array
       $result = $statement->fetchAll(PDO::FETCH_ASSOC);
         #return the array
       return $result;
   }
  

}
