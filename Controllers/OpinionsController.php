<?php

require_once '../Models/opinions.php';
require_once '../Controllers/DBcontroller.php';

class OpinionsController{
    public function addOpinion( Opinion $opinion )
   {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $feedback = $opinion->getfeedback();
            $clientId = $opinion->getclientId();
            $client_name = $opinion->getclient_name();
            $tripId = $opinion->gettripId();
            $trip_name = $opinion->gettrip_name();
            $rate = $opinion->getrate();
            $query="insert into opinions values ('','$feedback','$clientId','$client_name','$tripId','$trip_name','$rate')";
            return $this->db->insert($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
   }
   
   public function deleteOpinion($feedback_id)
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $query= "delete from opinions where feedback_id = $feedback_id";
         return $this->db->delete($query);
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
   }

   public function getOpinion()
   {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select * from opinion";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
   }
}

?>