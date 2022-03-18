<?php
session_start();
require_once('../common.php');

class Medication{
    use Common;

    private $result = [];

    public function __construct(){
         $action = $_POST['action'];
         switch($action){
            case 'log':  $this->logMedication();   break;
            case 'getlog': $this->getMedication(); break;
         }
    }

    //`id`, `userId`, `drugName`, `createdAt`

    public function getMedication(){
        $con        = $this->con();
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId     = $this->getUserByEmail($email)['userId'];
        $queryRow   = $con->query("SELECT * FROM `other_medications` WHERE `userId` ='$userId'")->fetch_assoc();
        return  $queryRow;
    }

    public function logMedication(){
        $con = $this->con(); 
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId     = $this->getUserByEmail($email)['userId'];
        $i = 0;
        $inputCount = count($_POST['drugName']);
        while($i<$inputCount){
            $drugName = $_POST['drugName'][$i]; 
            $sql      = "INSERT INTO `other_medications`(`userId`,`drugName`,`createdAt`) VALUES ('$userId', '$drugName', NOW())";
            $query    = $con->query($sql);
           if($query){
                if($i==$inputCount){
                    $this->result['status'] = "success";
                }
           }else{
                    $this->result['status'] = "Error";
           }

          $i++;
        }
    }
}



?>