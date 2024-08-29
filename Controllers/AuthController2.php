<?php 
require_once '../Models/user.php';
require_once 'DBController.php';

class AuthController2
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection

    public function register(Client $client)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $name = $client->getname();
            $email = $client->getemail();
            $password = $client->getpassword();
            $age = $client->getage();
            $gender = $client->getgender();
            $nationality = $client->getnationality();
            $mobile_number = $client->getmobile_number();
            $profile_photo = $client->getprofile_photo();
            //$admin = $client->getadmin();
            $query="insert into user values ('','$name','$email','$password','$age','$gender','$nationality','$mobile_number','$profile_photo', 'Client')";
            $result=$this->db->insert($query);
            if($result!=false)
            {

              session_start();
              $_SESSION["id"]=$result;
              $_SESSION["name"]=$client->getname();
              $_SESSION["password"]=$client->getpassword();
              $_SESSION["age"]=$client->getage();
              $_SESSION["email"]=$client->getemail();
              $_SESSION["gender"]=$client->getgender();
              $_SESSION["nationality"]=$client->getnationality();
              $_SESSION["mobile_number"]=$client->getmobile_number();
              $_SESSION["profile_photo"]=$client->getprofile_photo();

                $this->db->closeConnection();
                return true;
            }
            else
            {
                $_SESSION["errMsg"]="Somthing went wrong... try again later";
                $this->db->closeConnection();
                return false;
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }
    
}

?>