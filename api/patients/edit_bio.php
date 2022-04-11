<?php
session_start();
require_once('../common.php');

class EditBio {
        
    use Common;

    private $result = [];
    
    public function __construct(){ 
        $this->editBio();
    }

    private function UpdateUserContact($email){    
        // Table: users_contact  users_next_of_kin
        // `id`, `userId`, `email`, `phone`, `country`, `resdence_state`, `town_city`
        $con                     = self::con();
        $jsonInput               = file_get_contents('php://input');
        $obj                     = json_decode($jsonInput,true);  
        $contact_email           = $obj['contact_email'];
        $contact_phone 	         = $obj['contact_phone'];
        $contact_country         = $obj['contact_country'];
        $contact_resdence_state  = $obj['contact_resdence_state'];
        $contact_town_city       = $obj['contact_town_city'];
        $userId                  = $this->getUserByEmail($email)['userId'];
        $sql =""; 
        if(self::exists($userId,"users_contact","userId")){
            $sql .="UPDATE `users_contact` SET `email`='$contact_email', `phone`='$contact_phone', `country`='$contact_country', `resdence_state`='$contact_resdence_state', `town_city`='$contact_town_city' WHERE `userId`='$userId'";
        }else{
            $sql .="INSERT INTO `users_contact`(`userId`,`email`,`phone`,`country`,`resdence_state`,`town_city`) VALUES ('$userId', '$contact_email', '$contact_phone', '$contact_country', '$contact_resdence_state', '$contact_town_city')";
        }
        $query = $con->query($sql);
        if($query){
            return true;
            $this->result['status'] = "Contact NUpdate Successful!";
        }else{
            return false;
            $this->result['status'] = "Contact Update Failed!";
        }
        $con->close();
        //---------------------------------------------------------------------------------------
    }

    private function UpdateUserNextOfKin($email){    
        // Table: users_next_of_kin
        // `id`, `userId`, `name`, `phone`, `address`
        $jsonInput                   = file_get_contents('php://input');
        $obj                         = json_decode($jsonInput,true);  
        $con                         = self::con(); 
        $next_of_kin_name            = $obj['next_of_kin_name'];
        $next_of_kin_phone 	         = $obj['next_of_kin_phone'];
        $next_of_kin_address         = $obj['next_of_kin_address'];
        $userId                      = $this->getUserByEmail($email)['userId'];
        $sql =""; 	
        if(self::exists($userId,"users_next_of_kin","userId")){ 
            $sql .="UPDATE `users_next_of_kin` SET `name`='$next_of_kin_name',`phone`='$next_of_kin_phone',`address`='$next_of_kin_address' WHERE `userId`='$userId'";            
        }else{
            $sql .="INSERT INTO `users_next_of_kin`(`userId`,`name`,`phone`,`address`) VALUES('$userId','$next_of_kin_name','$next_of_kin_phone','$next_of_kin_address')"; 
        }
        $query = $con->query($sql);
        if($query){
            $this->result['status'] = "Next Of Kin Update Successful!";
            return true;
        }else{
            $this->result['status'] = "Next Of Kin Update Failed";
            return false;
        }
        $con->close();
        //---------------------------------------------------------------------------------------
    }

    private function UpdateUserInfo($email){    
        // Table: users
        // `userId`, `user_type`, `email`, `paswd`, `profile_pix_url`, `licence_url`, `fname`, `lname`,`otherNames`, `dob`, `age`, `gender`,
        // `education_level`, `phone`, `country`, `residence_state`, `town`, `tribe`, `religion`, `incom_level`, `cancer_type`,
        // `device_type`, `effect_reporter`, `care_giver_relationship`,`email_status`, `hospital`, `folioNumber`, `specialty`,
        // `managing_team`, `professional_bio`, `createdAt`, `updatedAt`
        $jsonInput   = file_get_contents('php://input');
        $obj         = json_decode($jsonInput,true);  
        $con             = self::con(); 
        $fname           = $obj['fname'];
        $lname 	         = $obj['lname'];
        $otherNames      = $obj['otherNames'];
        $gender          = $obj['gender'];
        $dob             = $obj['dob'];
        $age             = $obj['age'];
        $education_level = $obj['education_level'];
        $tribe           = $obj['tribe'];
        $religion        = $obj['religion'];
        $incom_level     = $obj['incom_level'];
        //===================================================
        $email           = $obj['email'];
        $phone 	         = $obj['phone'];
        $country         = $obj['country'];
        $resdence_state  = $obj['resdence_state'];
        $town_city       = $obj['town_city']; 
        //=================================================
        if(self::exists($email,"users","email")){  
            $sql = "UPDATE `users` SET `fname`='$fname', `lname`='$lname',`otherNames`='$otherNames',`gender`='$gender',
                                       `dob`='$dob',`age`='$age',`education_level`='$education_level',`tribe`='$tribe',
                                       `religion`='$religion',`incom_level`='$incom_level', `email`='$email',`phone`='$phone',
                                       `country`='$country',`residence_state`='$resdence_state',`town`='$town_city' WHERE `email`='$email'";
            $query = $con->query($sql);
            if($query){
                $this->result['status'] = "Bio Updated Successfully";
                return true;
            }else{
                $this->result['status'] = "Bio Update Failed";
                return false;
            }
        }
        $con->close();
        //----------------------------------------------------------------------------------------------------------------------------------
    }


    private function editBio(){  
        $email       = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        if( $this->UpdateUserNextOfKin($email) && $this->UpdateUserInfo($email)){
            $this->result['msg'] = "success"; 
        }else{
            $this->result['msg'] = "error"; 
        }
        
        echo json_encode($this->result);
    }
    


}

new EditBio();