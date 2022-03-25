<?php
session_start();
require_once('../../common.php');

class DeleteReminder{
    use Common;

    private $result = [];

    public function __construct(){
          $this->deleteReminder(); 
    }

    //`id`, `userId`, `looged_time`, `createdAt`

    public function deleteReminder(){
        $con        = $this->con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 

        $id         = $obj['id'];  
        $userId     = $obj['userId'];;
        $sql        = "DELETE FROM `reminders` WHERE `userId`='$userId' AND `id`='$id'";
        $query      = $con->query($sql);
        if($query){
            $this->result['msg']   = "success";
        }else{
            $this->result['msg']   = "Error";
        }
        
        echo json_encode($this->result);
    }


}

new DeleteReminder();



?>