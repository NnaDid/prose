<?php
session_start();
require_once('../../common.php');

class Login {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->login();
    }

    private function login(){ 
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 

        $email     = $obj['email']; 
        $pass  	   = $obj['pwd'];

        if(self::exists($email,"users","email")){  
            $sql  		= "SELECT * FROM `users` WHERE `email`='$email'";
            $query 		= $con->query($sql);     
            if($query){ 
                $row  = $query->fetch_assoc();
                // verify email
                if($row['email_status']=='verified'){
                    // verify password
                    if(password_verify($pass,$row['paswd'])){
                        $user = $_SESSION["PROSE_CARE__USER_EMAIL"]	= $row['email'];   // set user session
                        if(isset($user)){
                            $this->result['msg']  =['success'=>'success','user_type'=>$row['user_type']];   
                        }else{
                            $this->result['msg'] = "Sorry No Session Was set at this time";
                        }
                    }else{
                        $this->result['msg'] = "Incorrect Password";
                    }

                }else{
                    $this->result['msg'] = "You are yet to verify your email";
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

$login = new Login();