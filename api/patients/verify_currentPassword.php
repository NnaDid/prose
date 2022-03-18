<?php
session_start();
require_once('../common.php');

class Confirm {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->confirm();
    }

    private function confirm(){ 
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 

        $email     = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $pass  	   = $obj['pwd'];

        if(self::exists($email,"users","email")){  
            $sql  		= "SELECT * FROM `users` WHERE `email`='$email'";
            $query 		= $con->query($sql);     
            if($query){ 
                $row  = $query->fetch_assoc(); 
                // verify password
                if(password_verify($pass,$row['paswd'])){ 
                    $this->result['msg']  ='success'; 
                }else{
                    $this->result['msg'] = "Incorrect Password";
                }

            }else{
                $this->result['msg'] = "Error executing this query";
            }

        }else{
            die(json_encode(['msg'=>"Wrong Email"]));
        }	 
                    
        $con->close();
        echo json_encode($this->result);
    }
    


}

new Confirm();