<?php

class Opinion
{
    private $feedback_id;
    private $feedback;
    private $clientId;
    private $client_name;
    private $tripId;
    private $trip_name;
    private $rate;
    public function setfeedback_id($feedback_id){
        $this->feedback_id=$feedback_id;
      }
      
     public function getfeedback_id(){
      return $this->feedback_id;
     }
     
  
   
    public function setfeedback($feedback){
      $this->feedback = $feedback;
  }

  public function getfeedback(){
    return $this->feedback;
   }

  public function getname(){
    return $this->name;
   }
    public function setclientId($clientId){
        $this->clientId=$clientId;
      }
      
     public function getclientId(){
      return $this->clientId;
     }

     public function setclient_name($client_name){
        $this->client_name=$client_name;
      }
      
     public function getclient_name(){
      return $this->client_name;
     }

     public function settripId($tripId){
        $this->tripId=$tripId;
      }
      
     public function gettripId(){
      return $this->tripId;
     }
     public function settrip_name($trip_name){
        $this->trip_name=$trip_name;
      }
      
     public function gettrip_name(){
      return $this->trip_name;
     }

     public function setrate($rate){
        $this->rate=$rate;
      }
      
     public function getrate(){
      return $this->rate;
     }

}


?>