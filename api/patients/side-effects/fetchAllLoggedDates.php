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
        $row                    = $query->fetch_all(MYSQLI_ASSOC);
        $this->result['msg']    = "success";
        $this->result['data']   = $row;
        
        echo json_encode($this->result);
    }


}

new GetAllLoggedDates();



?>