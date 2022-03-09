<?php 
session_start();
require_once('../../common.php');

class Register {
                 
    use Common;

    private $result = [];

    public function __construct(){
        $this->register();  
    }
    

    // `userId`, `user_type`, `email`, `paswd`, `profile_pix_url`, `licence_url`, `fname`, `lname`, `dob`, `age`, `gender`,
    // `education_level`, `phone`, `country`, `residence_state`, `town`, `tribe`, `religion`, `incom_level`, `cancer_type`,
    // `device_type`, `effect_reporter`, `care_giver_relationship`,`email_status`, `hospital`, `folioNumber`, `specialty`,
    // `managing_team`, `professional_bio`, `createdAt`, `updatedAt`

    public function register(){   
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);   
        
        $email            = $_SESSION["PROSE_CARE__USER_EMAIL"] ?? $obj['email']; 
        $cancer_type        = $obj['cancer_type']; 
        $device_type          = $obj['device_type']; 
        $effect_reporter        = $obj['effect_reporter'];  
        $caregiver_relationship   = $obj['caregiver_relationship'];    
        $mgt_team                  = $obj['mgt_team'];    
      
      if(self::exists($email,"users","email")){ 
                $sql      = "UPDATE `users` SET `cancer_type`='$cancer_type',`device_type`='$device_type', `effect_reporter`='$effect_reporter', `care_giver_relationship`='$caregiver_relationship',`mgt_team`='$mgt_team',`updatedAt`=NOW() WHERE `email`='$email'";
                $statment = $con->query($sql);
                if($statment){
                      
                    $this->result['msg'] = 'success';

                }else{
                    $this->result['msg'] = 'Error Ocured';
                }

        }else{
            $this->result['msg'] = 'User doesn\'t exist';
        }

         echo json_encode($this->result);
    }

} 

new Register();