<?php
session_start();
require_once('../common.php');

class Medication{
    use Common;

    private $result = [];

    public function __construct(){
        $jsonInput  = file_get_contents('php://input');  
        $obj        = json_decode($jsonInput,true); 
        $action     = $obj['action'];
        $drug       = $obj['drugs'];
         switch($action){
            case 'logDrug': $this->logMedication($drug); break;
            case 'getDrug': $this->getMedication();      break;
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

    public function logMedication($drug){
        $con        = $this->con(); 
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"];
        $userId     = $this->getUserByEmail($email)['userId'];
        $i          = 0;
        $inputCount = count($drug); 
        while($i<$inputCount){
            $drugName = $drug[$i]; 
            $sql      = "INSERT INTO `other_medications`(`userId`,`drugName`,`createdAt`) VALUES ('$userId', '$drugName', NOW())";
            $query    = $con->query($sql);
           if($query){ 
                if($i==($inputCount-1)){   $this->result['msg'] = "success";}
           }else{
             $this->result['msg'] = "Error";
           }

          $i++;
        }
        echo json_encode($this->result);
    }
}

new Medication();


?>