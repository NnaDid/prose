<?php 
session_start();
require_once('../../common.php');

class Consent {
                 
    use Common;

    private $result = [];

    public function __construct(){
        $this->Consent();  
    }

    public function Consent(){   
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);   

        $consent_doc_url = $obj['consent_doc_Url'];     
        $email           = $obj['email'] ?? $_SESSION["PROSE_CARE__USER_EMAIL"];   
      
      if(self::exists($email,"users","email")){ 
                $sql      = "UPDATE `users` SET `consent_doc_url`='$consent_doc_url',`updatedAt`=NOW() WHERE `email`='$email'";
                $statment = $con->query($sql);
                if($statment){ 
                    $this->result['msg'] = 'success';
                }else{
                    $this->result['msg'] = 'Error Saving file';
                }

        }else{
            $this->result['msg'] = 'User Does Not Exist';
        }

         echo json_encode($this->result);
    }

} 

new Consent();