<?php
session_start();
require_once('../common.php');

class EditAnthropometry {
        
    use Common;

    private $result = [];
    
    public function __construct(){ 
        $this->UpdateAnthropometry();
    }

    private function UpdateAnthropometry(){    
        // Table: users `
        //
        $jsonInput   = file_get_contents('php://input');
        $obj         = json_decode($jsonInput,true);  
        $con         = self::con(); 

        $email           = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId          = $this->getUserByEmail($email)['userId'];
        //`id`, `userId`, `height`, `weight`, `bmi`, `waist_circum`, `head_circum`, `createdAt`
        $height          = $obj['height'];
        $weight       	 = $obj['weight'];
        $bmi             = $obj['bmi'];
        $waist_circum    = $obj['waist_circum'];
        $head_circum     = $obj['head_circum'];  
        if(self::exists($userId,"antropometry","userId")){  
            $sql = "UPDATE `antropometry` SET `height`='$height',`weight`='$weight',`bmi`='$bmi',`waist_circum`='$waist_circum',`head_circum`='$head_circum',`createdAt`=NOW() WHERE `userId`='$userId'";
            $query = $con->query($sql);
            if($query){
                $this->result['msg']    = "success";
                $this->result['status'] = "Anthropomentry Updated Successfully";
            }else{
                $this->result['msg']    = "error"; 
                $this->result['status'] = "Anthropomentry Update Failed";
            }
        }else{
            $sql   = "INSERT INTO `antropometry`(`userId`,`height`,`weight`,`bmi`,`waist_circum`,`head_circum`,`createdAt`) VALUES('$userId','$height','$weight','$bmi','$waist_circum','$head_circum',NOW())";
            $query = $con->query($sql);
            if($query){
                $this->result['msg']    = "success";
                $this->result['status'] = "Successfully Recorded";
            }else{
                $this->result['msg']    = "error"; 
                $this->result['status'] = "Record Failed";
            }
        }
        echo json_encode($this->result);
        $con->close();
        //----------------------------------------------------------------------------------------------------------------------------------
    }
    


}

new EditAnthropometry();