<?php
session_start();
require_once('../common.php');

class GetMedications {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->getMedications();
    }

    //`id`, `userId`, `drugName`, `createdAt`
    private function getMedications(){    
        $con    = self::con(); 
        $email  = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId = $this->getUserByEmail($email)['userId'];
        $sql    = "SELECT * FROM `other_medications` WHERE `userId`='$userId'";
        $query  = $con->query($sql);
        if($query){
            $rows   = $query->fetch_all(MYSQLI_ASSOC);
            $this->result['msg']     =  'success';
            $this->result['MEDICS']  =  $rows;
        }
        $con->close();  
        echo json_encode($this->result);      
        //---------------------------------------------------------------------------------------
    }


}

new GetMedications();