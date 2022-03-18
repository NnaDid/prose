<?php
session_start();
require_once('../../common.php');

class Reminders{
    use Common;

    private $result = [];

    public function __construct(){
          $this->getReminders(); 
    }

    //`id`, `userId`, `looged_time`, `createdAt`

    public function getReminders(){
        $con        = $this->con();
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId     = $this->getUserByEmail($email)['userId'];
        $query      = $con->query("SELECT * FROM `reminders` WHERE `userId` ='$userId'");
        $data       = [];
        $i=0;
        while($row = $query->fetch_assoc()){
            $data[$i] = $row ;
            $i++;
        }
        $this->result['msg']   = ['success'=>'success','data'=>$data];
        echo json_encode($this->result);
    }


}

new Reminders();


?>