<?php
session_start();
require_once('../../common.php');

class HeadNeckCancer{
    use Common;

    private $result = [];

    public function __construct(){
          $this->addSideEffects(); 
    }

    /*
`userId`, 
`mouth_sore`, `swallowing_difficulty`, `smell_loss`, `taste_changes`, 
`dry_mouth`, `mouth_corner_cracking`, `voice_chnage`, `appetite_change`, 
`nausea`, `vomiting`,`skin_color_changes`, `tired_weak`, `weight`, 
`fbc_parameters`, `others`, `on_chemotherapy`, `how_frequent`, `dateLogged`, `createdAt`
    */


    public function addSideEffects(){
        $con        = $this->con();
        $jsonInput  = file_get_contents('php://input');  
        $obj        = json_decode($jsonInput,true); 
        //===============================================//
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId     = $this->getUserByEmail($email)['userId'];

        //------------------------------------------------------------------//    
        $appetite_changes           = $obj['appetite_changes'];
        $cracking_at_mouth_corner   = $obj['cracking_at_mouth_corner'];  
        $date                       = $obj['date'];
        $dry_mouth                  = $obj['dry_mouth'];
        //---------------------------------------------------------------//
        $fbc_parameters             = $obj['fbc_parameters'];
        $how_often                  = $obj['how_often'] ?? 'None';
        $loss_of_smell              = $obj['loss_of_smell'];
        $mouth_sore                 = $obj['mouth_sore'];
        //--------------------------------------------------------------//
        $nausea                     = $obj['nausea'];
        $on_chemotherapy            = $obj['on_chemotherapy'];
        $other_info                 = $obj['other_info'];
        $skin_color_changes         = $obj['skin_color_changes'];
        $swallowing_difficulty      = $obj['swallowing_difficulty'];
        //----------------------------------------------------------------//
        $taste_changes              = $obj['taste_changes'];
        $tired_weak                 = $obj['tired_weak'];
        $voice_changes              = $obj['voice_changes'];
        $vomiting                   = $obj['vomiting'];
        $weight_this_week           = $obj['weight_this_week'];

        // check if the user has logged this date already
        $sql  ="";
        $check = $con->query("SELECT * FROM `head_neck_effect` WHERE `userId` ='$userId' AND `dateLogged` ='$date'");
        if($check->num_rows>0){
            $sql  ="UPDATE `head_neck_effect` SET 
                                            `mouth_sore` ='$mouth_sore',
                                            `swallowing_difficulty` ='$swallowing_difficulty',
                                            `smell_loss` ='$loss_of_smell',
                                            `taste_changes` ='$taste_changes',
                                            `dry_mouth` ='$dry_mouth',
                                            `mouth_corner_cracking` ='$cracking_at_mouth_corner',
                                            `voice_chnage` ='$voice_changes',
                                            `appetite_change` ='$appetite_changes',
                                            `nausea`='$nausea',
                                            `vomiting` ='$vomiting',
                                            `skin_color_changes` ='$skin_color_changes',
                                            `tired_weak` ='$tired_weak',
                                            `weight` ='$weight_this_week',
                                            `fbc_parameters` ='$fbc_parameters',
                                            `others` ='$other_info',
                                            `on_chemotherapy` ='$on_chemotherapy',
                                            `how_frequent` ='$how_often', 
                                            `createdAt` =NOW()
                                            WHERE `userId` ='$userId' AND `dateLogged` ='$date'";
        }else{
              $sql  .= "INSERT INTO `head_neck_effect`(`userId`, `mouth_sore`, `swallowing_difficulty`, `smell_loss`, 
                                                    `taste_changes`, `dry_mouth`, `mouth_corner_cracking`, `voice_chnage`, 
                                                    `appetite_change`, `nausea`, `vomiting`,`skin_color_changes`, 
                                                    `tired_weak`, `weight`, `fbc_parameters`, `others`, 
                                                    `on_chemotherapy`, `how_frequent`, `dateLogged`, `createdAt`) 
                                             VALUES('$userId', '$mouth_sore', '$swallowing_difficulty', '$loss_of_smell',
                                                   '$taste_changes', '$dry_mouth', '$cracking_at_mouth_corner', '$voice_changes',
                                                    '$appetite_changes', '$nausea', '$vomiting', '$skin_color_changes',
                                                    '$tired_weak','$weight_this_week','$fbc_parameters','$other_info',
                                                    '$on_chemotherapy','$how_often','$date',NOW())";
        }
        
        $query      = $con->query($sql);
        if($query){
            $this->result['msg']   = "success";
        }else{
            $this->result['msg']   = "Error >".$con->error;
        }
        
        echo json_encode($this->result);
    }


}

new HeadNeckCancer();



?>