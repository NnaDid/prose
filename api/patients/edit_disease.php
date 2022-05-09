<?php
session_start();
require_once('../common.php');

class EditDisease {
        
    use Common;

    private $result = [];
    
    public function __construct(){ 
        $this->UpdateDiseaseInfo();
    }

    private function UpdateDiseaseInfo(){    
        // Table: users `
        //
        $jsonInput   = file_get_contents('php://input');
        $obj         = json_decode($jsonInput,true);  
        $con         = self::con(); 

        $email           = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId          = $this->getUserByEmail($email)['userId'];
        //`userId`, `how_old`, `cancer_type`, `histology`, `cancer_grade`, `cancer_stage`, `comorbidity`
        $how_old         = $obj['how_old'];
        $cancer_type  	 = $obj['cancer_type'];
        $hist_type       = $obj['hist_type'];
        $cancer_grade    = $obj['cancer_grade'];
        $cancer_stage    = $obj['cancer_stage'];
        $comorbidity     = $obj['comorbidity']; 
        if(self::exists($userId,"disease_xteristics","userId")){  
            $sql = "UPDATE `disease_xteristics` SET `how_old`='$how_old',`cancer_type`='$cancer_type',`histology`='$hist_type',`cancer_grade`='$cancer_grade',`cancer_stage`='$cancer_stage',`comorbidity`='$comorbidity',`createdAt`=NOW() WHERE `userId`='$userId'";
            $query = $con->query($sql);
            if($query){
                $this->result['msg']    = "success";
                $this->result['status'] = "Disease Updated Successfully";
            }else{
                $this->result['msg']    = "error"; 
                $this->result['status'] = "Disease Update Failed";
            }
        }else{
            $sql   = "INSERT INTO `disease_xteristics`(`userId`,`how_old`,`cancer_type`,`histology`,`cancer_grade`,`cancer_stage`,`comorbidity`,`createdAt`) 
                      VALUES('$userId','$how_old','$cancer_type','$histology','$cancer_grade','$cancer_stage','$comorbidity',NOW())";
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

new EditDisease();