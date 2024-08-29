<?php

class trip
{
    private $id;
    private $name;
    private $price;
    private $num_of_travelers;
    private $destination;
    private $num_of_days;

    public function setid($id){
        $this->id=$id;
      }
      
     public function getid(){
      return $this->id;
     }
     
  
   
    public function setname($name){
      $this->name = $name;
  }

  public function getname(){
    return $this->name;
   }
    public function setprice($price){
        $this->price=$price;
      }
      
     public function getprice(){
      return $this->price;
     }

     public function setnum_of_travelers($num_of_travelers){
        $this->num_of_travelers=$num_of_travelers;
      }
      
     public function getnum_of_travelers(){
      return $this->num_of_travelers;
     }

     public function setdestination($destination){
        $this->destination=$destination;
      }
      
     public function getdestination(){
      return $this->destination;
     }
     public function setnum_of_days($num_of_days){
        $this->num_of_days=$num_of_days;
      }
      
     public function getnum_of_days(){
      return $this->num_of_days;
     }

}


?>