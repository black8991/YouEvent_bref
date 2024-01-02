<?php
class typeTickets
{
    private $ticket_type;
    private $prix;
    private $id_event;
   
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
   # the $id_event have taket win the buttone update clikd
    public function createTicket($ticket_type,$prix,$id_event)
    {
         $this->db->create("typeTickets", ["ticket_type" =>$ticket_type, "prix" =>$prix,"id_event"=>$id_event]);
    }
  
    public function readAllTicket() 
    {
        return $this->db->read("typeTickets");
    }
  
    public function modifierTicket($name,$location,$date,$escription,$imag,$id)
    {
        $this->db->update("typeTickets",["name" => $name, "location" => $location,"date" => $date, "escription" => $escription,"imag"=>$imag], "id=$id");
    }
    # you have to pass the $id from button that wos clike
    public function deletTicket($id)
    {
      $this->db->delete("typeTickets", "id=$id");
    }

}