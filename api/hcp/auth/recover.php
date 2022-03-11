<?php
session_start();
require_once('../../common.php');

class Recover{
    
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->recoverPassword();
    }

  private function computeSHA512TransactionHash($stringifiedData, $clientSecret) {
        $computedHash = hash_hmac('sha512', $stringifiedData, $clientSecret);
        return $computedHash;
    }

    public function recoverPassword(){ 
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);   

        $email     = $obj['email']; 
        
        if(self::exists($email,"users","email")){			  
                $new_password  	    = substr(str_shuffle(rand(time(),time()+7)."Aab12345CcDdeFoNdaTi@zZKkL"),1,8);
                $hash_pass 			= password_hash($new_password,PASSWORD_BCRYPT); // hash the password

                $updateQuery 		= "UPDATE `users` SET `paswd`=? WHERE `email`=?";
                $stmt_update 		= $con->prepare($updateQuery);
                $stmt_update->bind_param("ss",$hash_pass,$email);

        if($stmt_update->execute()){
             $msg  ='<div style ="border-bottom:3px solid #1BBC9B;">
                        <h2 style ="background-color:#1BBC9B; font-weight:600;border-bottom:3px solid #1BBC9B;">PROSEcare PASSWORD RECOVERY</h2>
                        <p> A request to reset your password has been initiated @ prosecare.com</p>
                        <h3>Your can set a new Passowrd by clicking on the link below :</h3>
                        <p><a href="https:www.proseccare.com/recover/recover-password.php?pu='.$this->computeSHA512TransactionHash($email,$new_password).'&&sec='.$new_password.'">https:www.proseccare.com/recover/recover-password.php?pu='.$this->computeSHA512TransactionHash($email, $new_password).'&&sec='.$new_password.'<a/></p>';
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <info@prosecare.com>' . "\r\n";
                    $headers .= 'Cc: support@prosecare.com' . "\r\n";
                if(@mail($email,"PROSEcare Password Recovery",$msg,$headers)){
                    $this->result['msg'] = "Check you email to get the new password we sent you."; 
                }else{
                    $this->result['msg'] ='Error. Please Check if you have internet';
                }
                
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