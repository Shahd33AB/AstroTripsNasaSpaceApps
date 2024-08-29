<?php 
require_once 'Models/client.php';
require_once 'DBController.php';

class AuthController
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    public function login(Client $client)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $email = $client->getemail();
            $password = $client->getpassword();
            $query="select * from client where email='$email' and password ='$password'";
            $result=$this->db->select($query);
        
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)
                {
                    session_start();
                    $_SESSION["errMsg"]="You have entered wrong email or password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    session_start();
                    $_SESSION["id"]=$result[0]["id"];
                    $_SESSION["name"]=$result[0]["name"];
                    $_SESSION["password"]=$result[0]["password"];
                    $_SESSION["age"]=$result[0]["age"];
                    $_SESSION["email"]=$result[0]["email"];
                    $_SESSION["gender"]=$result[0]["gender"];
                    $_SESSION["nationality"]=$result[0]["nationality"];
                    $_SESSION["mobile_number"]=$result[0]["mobile_number"];
                    $_SESSION["profile_photo"]=$result[0]["profile_photo"];

                    if($result[0]["admin"] == "Client")
                    {
                        $_SESSION["admin"]="Client";
                    }
                    else
                    {
                        $_SESSION["admin"]="Admin";
                    }
                    
                    $this->db->closeConnection();
                    return true;
                }
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

