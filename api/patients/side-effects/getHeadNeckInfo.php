<?php
session_start();
require_once('../../common.php');

class GetMalePelvicCancerByDate{
    use Common;

    private $result = [];

    public function __construct(){
          $this->getSideEffectsByDate(); 
    }


    public function getSideEffectsByDate(){
        $con        = $this->con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 
        //===============================================//
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId     = $this->getUserByEmail($email)['userId']; 
        $dateLogged = $obj['date'];
        $query      = $con->query("SELECT * FROM `head_neck_effect` WHERE `userId` ='$userId' AND `dateLogged`='$dateLogged'");
        if($query){
            if($query ->num_rows>0){
                $row                    = $query->fetch_assoc();
                $this->result['msg']    = "success";
                $this->result['data']   = $row;
            }else{
                $this->result['msg']    = "success";
                $this->result['data']   = "NO DATA FOUND";
            }

        }else{
            $this->result['msg']   = "Error >";
        }
        
        echo json_encode($this->result);
    }


}

new GetMalePelvicCancerByDate();



?>