<?php


require_once '../Models/exam.php';
require_once '../Controllers/DBController.php';
class ExamController
{
   
   protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection


   public function getTrip($id)
   {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $query="select id , name , price ,num_of_travelers,destination,num_of_days from trip where clientId = $client_id";
            return $this->db->select($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
   }



 

   public function addTrip(Trip $trip)
   {
         $this->db=new DBController;
         if($this->db->openConnection())
         {
            $name = $exam->getexamName();
            $price = $exam->getexamTime();
            $num = $exam->getuser_id();
            $query="insert into exam values ('','$examName','$examTime','$userId')";
            return $this->db->insert($query);
         }
         else
         {
            echo "Error in Database Connection";
            return false; 
         }
   }
   
   public function deletetExam($examId)
   {
      $this->db=new DBController;
      if($this->db->openConnection())
      {
         $query= "delete from exam where examId = $examId";
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