<?php
session_start();
require_once('../../common.php');

class UpdateReminders{
    use Common;

    private $result = [];

    public function __construct(){
          $this->updateReminders(); 
    }

    //`id`, `userId`, `looged_time`, `createdAt`

    public function updateReminders(){
        $con        = $this->con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);  

        $id         = $obj['id'];  
        $userId     = $obj['userId']; 
        $loggedTime = $obj['_time'];  
        $sql        = "UPDATE `reminders` SET `looged_time`='$loggedTime', `createdAt`=NOW() WHERE `userId`='$userId' AND `id`='$id'";
        $query      = $con->query($sql);
        if($query){
            $this->result['msg']   = "success";
        }else{
            $this->result['msg']   = "Error";
        }
        
        echo json_encode($this->result);
    }


}

new UpdateReminders();



?>