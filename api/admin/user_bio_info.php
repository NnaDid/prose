<?php 
require_once('../common.php');

class Patients{
    use Common;

    private $result = [];

    public function __construct(){ 
        $jsonInput  = file_get_contents('php://input');  
        $obj        = json_decode($jsonInput,true); 
        $userId     = $obj['uid']  ;    
        $this->userInfoAll($userId);
    }


    public function getUserBio($userId){
            $con      = $this->con();  
            $sql      = "SELECT * FROM `users` WHERE `userId`='$userId'";
            $query    = $con->query($sql);
            $row      = $query->fetch_assoc(); 
            return $row ?? []; 
    }

    public function getNextOfKin($userId){
            $con      = $this->con();  
            $sql      = "SELECT * FROM `users_next_of_kin` WHERE `userId`='$userId'";
            $query    = $con->query($sql);
            $row      = $query->fetch_assoc(); 
            return $row ?? []; 
    }

    public function getAnthropometry($userId){
            $con      = $this->con();  
            $sql      = "SELECT * FROM `antropometry` WHERE `userId`='$userId'";
            $query    = $con->query($sql);
            $row      = $query->fetch_assoc(); 
            return $row ?? []; 
    }

    public function getDiseaseXteristics($userId){
            $con      = $this->con();  
            $sql      = "SELECT * FROM `disease_xteristics` WHERE `userId`='$userId'";
            $query    = $con->query($sql);
            $row      = $query->fetch_assoc(); 
            return $row ?? [];
           
    }

    private function userInfoAll($userId){
        $this->result['DISEASE'] = $this->getDiseaseXteristics($userId);
        $this->result['ANTHRO']  = $this->getAnthropometry($userId);
        $this->result['NEXT']    = $this->getNextOfKin($userId);
        $this->result['BIO']     = $this->getUserBio($userId);

        $this->result['msg'] = "success";
        echo json_encode($this->result);
    }

}

new Patients();


?>