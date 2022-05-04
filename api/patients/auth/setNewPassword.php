<?php
session_start();
require_once('../../common.php');

class Recover{
    
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->recoverPassword();
    }


    public function recoverPassword(){ 
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);   

        $email     = $obj['email']; 
        $p1        = $obj['p1']; 
        $p2        = $obj['p2']; 

        if($p1!==$p2){ die(json_encode(['msg'=>"OOPs!!! Password Did not match"]));} 
        
        if(self::exists($email,"users","email")){		 
                $hash_pass 			= password_hash($p2,PASSWORD_BCRYPT); // hash the password

                $updateQuery 		= "UPDATE `users` SET `paswd`=? WHERE `email`=?";
                $stmt_update 		= $con->prepare($updateQuery);
                $stmt_update->bind_param("ss",$hash_pass,$email);

        if($stmt_update->execute()){
                   $msg  ='<div style ="border-bottom:3px solid #1BBC9B;">
                            <h2 style ="background-color:#1BBC9B; font-weight:600;border-bottom:3px solid #1BBC9B;">PROSEcare NEW PASSWORD SET SUCCESSFULLY </h2>
                            <p> A request to reset your password has been initiated @ prosecare.com</p>
                            <h3>Your new password is now set successfully</h3>';
                    $headers  = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <info@prosecare.com>' . "\r\n";
                    $headers .= 'Cc: support@prosecare.com' . "\r\n";
                   @mail($email,"PROSEcare Password Recovery Successfull",$msg,$headers);
                    $this->result['msg'] = 'Congratulations! Your new password is successfully set.'; 
                    $this->result['status'] ='success';
               //}else{
                    //$this->result['msg'] ='Error. Please Check if you have internet';
                //}
                
                  $stmt_update->close();
            }
        
        
            }else{
                $this->result['msg'] = "User doesn't exist";
            } 
            $con->close();
            echo json_encode($this->result);
        }
  }

new Recover();