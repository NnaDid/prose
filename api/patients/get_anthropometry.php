<?php
session_start();
require_once('../common.php');

class GetAnthropomentry {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->getAthropometry();
    }

    // `id`, `userId`, `height`, `bmi`, `waist_circum`, `head_circum`, `createdAt`

    private function getAthropometry(){    
        $con    = self::con(); 
        $email  = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId = $this->getUserByEmail($email)['userId'];
        $sql    = "SELECT * FROM `antropometry` WHERE `userId`='$userId'";
        $query  = $con->query($sql);
        if($query){
            $result                 = $query->fetch_assoc();
            $this->result['ANTHRO'] = $result;
        }
        $con->close();  
       echo json_encode($this->result);      
        //---------------------------------------------------------------------------------------
    }


}

new GetAnthropomentry();