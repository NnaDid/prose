<?php
session_start();
require_once('../common.php');

class GetBio {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->getBioInfo();
    }

    // `userId`, `how_old`, `cancer_type`, `histology`, `cancer_grade`, `cancer_stage`, `comorbidity`, `createdAt`

    private function getNextOfKin($email){    
        // Table: users_next_of_kin
        // `id`, `userId`, `name`, `phone`, `address` 
        $con    = self::con(); 
        $userId = $this->getUserByEmail($email)['userId'];
        $sql    = "SELECT * FROM `users_next_of_kin` WHERE `userId`='$userId'";
        $query  = $con->query($sql);
        if($query){
            $result                      = $query->fetch_assoc();
            $this->result['next_of_kin'] = $result;
        }
        $con->close();        
        //---------------------------------------------------------------------------------------
    }

    private function getUserInfo($email){    
        // Table: users
        // `userId`, `user_type`, `email`, `paswd`, `profile_pix_url`, `licence_url`, `fname`, `lname`,`otherNames`, `dob`, `age`, `gender`,
        // `education_level`, `phone`, `country`, `residence_state`, `town`, `tribe`, `religion`, `incom_level`, `cancer_type`,
        // `device_type`, `effect_reporter`, `care_giver_relationship`,`email_status`, `hospital`, `folioNumber`, `specialty`,
        // `managing_team`, `professional_bio`, `createdAt`, `updatedAt`
        $con    = self::con(); 
        $sql    = "SELECT * FROM `users` WHERE `email`='$email'";
        $query  = $con->query($sql);
        if($query){
            $result                 = $query->fetch_assoc();
            $this->result['user']   = $result;
        }
        //----------------------------------------------------------------------------------------------------------------------------------
    }


    private function getBioInfo(){     
        $email = $_SESSION["PROSE_CARE__USER_EMAIL"];  
        // $this->getContact($email);
        $this->getNextOfKin($email);
        $this->getUserInfo($email);
        echo json_encode($this->result);
    }
    


}

new GetBio();