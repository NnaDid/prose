<?php
session_start();
require_once('../../common.php');

class GetAllLoggedDates{
    use Common;

    private $result = [];

    public function __construct(){
          $this->getSideEffectsDates(); 
    }


    public function getSideEffectsDates(){
        $con        = $this->con(); 
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 
        $tableName = $obj['tableName'];
        //===============================================//
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId     = $this->getUserByEmail($email)['userId'];  
        $query      = $con->query("SELECT `dateLogged` FROM `".$tableName."` WHERE `userId` ='$userId'");
        if($query && $query->num_rows>0){
            // $row       = $query->fetch_all(MYSQLI_ASSOC);
            $returnResult = []; 
            while($row = $query->fetch_assoc()) {
                $returnResult[] = $row;
            }
            $this->result['msg']    = "success";
            $this->result['data']   = $returnResult; 
        }else{
            $this->result['msg']    = "No Record";
            $this->result['data']   = [];           
        }

        
        echo json_encode($this->result);
    }


}

new GetAllLoggedDates();



?>