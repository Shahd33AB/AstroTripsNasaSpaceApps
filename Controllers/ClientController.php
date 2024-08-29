<?php


require_once '../Models/client.php';
require_once '../Controllers/DBController.php';
class ClientController
{
   
   protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection


   public function getClient($id)
   {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select id , name , age ,email,password,gender,nationality,mobile_number,profile_photo,admin from client where clientId = $client_id";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
   }



 

   public function addClient(Client $client)
   {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $name = $client->getname();
            $age = $client->getage();
            $email = $client->getemail();
            $password = $client->getpassword();
            $gender = $client->getgender();
            $nationality = $client->getnationality();
            $mobile_number = $client->getmobile_number();
            $profile_photo = $client->getprofile_photo();
            $admin = $client->getadmin();

            $query="insert into client values ('','$name','$age','$email','$password','$gender','$nationality','$mobile_number','$profile_photo','$admin')";
            return $this->db->insert($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
   }
   
   public function deletetClient($id)
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $query= "delete from client where id = $id";
         return $this->db->delete($query);
      }
      else
      {
         echo "Error in Database Connection";
         return false; 
      }
   }
}
?>