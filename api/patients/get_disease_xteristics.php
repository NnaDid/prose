<?php
session_start();
require_once('../common.php');

class GetDCharacteristics {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->getDiseaseChracteristics();
    }

    // `userId`, `how_old`, `cancer_type`, `histology`, `cancer_grade`, 
    //`cancer_stage`, `comorbidity`, `createdAt`

    private function getDiseaseChracteristics(){    
        $con    = self::con(); 
        $email  = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId = $this->getUserByEmail($email)['userId'];
        $sql    = "SELECT * FROM `disease_xteristics` WHERE `userId`='$userId'";
        $query  = $con->query($sql);
        if($query){
            $result                      = $query->fetch_assoc();
            $this->result['DS_xteristics'] = $result;
        }
        $con->close();  
       echo json_encode($this->result);      
        //---------------------------------------------------------------------------------------
    }


}

new GetDCharacteristics();