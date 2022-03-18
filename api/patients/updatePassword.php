<?php
session_start();
require_once('../common.php');

class Update {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->update();
    }

    private function update(){ 
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 

        $email        = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $currentPwd   = $obj['cp'];
        $newPwd 	  = $obj['p1'];
        $newPwd2      = $obj['p2'];

        if($newPwd!==$newPwd2){ die(["msg"=>"Password Missmatch"]);}
        
        if(self::exists($email,"users","email")){  
            $sql  		= "SELECT * FROM `users` WHERE `email`='$email'";
            $query 		= $con->query($sql);     
            if($query){ 
                $row  = $query->fetch_assoc(); 
                // verify password
                if(password_verify($currentPwd,$row['paswd'])){ 
                    // update the password
                    //=====================================================================//
                    $hassPass  = password_hash($newPwd,PASSWORD_DEFAULT);
                    $updateSql = "UPDATE `users` SET `paswd`='$hassPass' WHERE `email`='$email'";
                    $query 	   = $con->query($updateSql); 
                    if($query){ 
                        $this->result['msg']  ='success'; 
                    }else{
                        $this->result['msg']  ='Error'; 
                    }
                   //====================================================================//
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

new Update();