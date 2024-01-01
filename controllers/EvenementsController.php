<?php

require_once 'EvenementsModel.php';

class EvenementsController
{
    private $evenementsModel;

    public function __construct()
    {
        $this->evenementsModel = new EvenementsModel();
    }
  # you have to creat functin for validat the forme that tike data of event
    public function handleAjouterEventForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
         
            $name = $_POST['name'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            $description = $_POST['description'];
            $imag = $_POST['imag'];

            #coll the ajoute function for give it's the valuer
            $this->evenementsModel->AjouterEvent($name, $location, $date, $description, $imag);

            #redirect to the same page
            header('Location: index.php');
            exit();
        }
    }
   # you have to creat functin for validat the forme that update data of event
    public function handleModifierEventForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            $eventId = $_POST['eventId'];
            $name = $_POST['name'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            $description = $_POST['description'];
            $imag = $_POST['imag'];
             #coll the ajoute function for give it's the valuer
            // Call the model function to modify the event
            $this->evenementsModel->ModifierEvent($eventId, $name, $location, $date, $description, $imag);

            # redirect to a success page or wherever you need to go
            header('Location: success_page.php');
            exit();
        }
    }

 
}


$object = new ValidatinEvent();

