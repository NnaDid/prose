<?php
session_start();
require_once('../../common.php');

class AddReminders{
    use Common;

    private $result = [];

    public function __construct(){
          $this->addReminders(); 
    }

    //`id`, `userId`, `looged_time`, `createdAt`

    public function addReminders(){
        $con        = $this->con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);  

        $id         = $obj['id'];  
        $userId     = $obj['id'];   
        $sql        = "INSERT INTO `reminders`(`userId`, `looged_time`, `createdAt`) VALUES('$userId','$reminder', NOW())";
        $query      = $con->query($sql);
        if($query){
            $this->result['msg']   = "success";
        }else{
            $this->result['msg']   = "Error";
        }
        
        echo json_encode($this->result);
    }


}

new AddReminders();



?>