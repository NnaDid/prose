<?php
session_start();
require_once('../../common.php');

class FemalePelvicCancer{
    use Common;

    private $result = [];

    public function __construct(){
          $this->addSideEffects(); 
    }

    /*
        `userId`, `watery_stools`, `nausea`, `vomiting`, `skin_color`, `anus_changes`, `blood_in_urine`, 
        `difficulty_urinating`, `painful_urination`, `feel_like_urinating`, `urine_flow_control`, 
        `urination_rate`, `vaginal_dryness`, `stool_leakage`, `tired_weak`, `weight`, `fbc_parameters`, 
        `others`, `on_chemotherapy`, `how_frequent`, `dateLogged`, `createdAt`
    */


    public function addSideEffects(){
        $con        = $this->con();
        $jsonInput  = file_get_contents('php://input');  
        $obj        = json_decode($jsonInput,true); 
        //===============================================//
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId     = $this->getUserByEmail($email)['userId'];

        //------------------------------------------------------------------//    
        $skin_color                      = $obj['skin_color'] ;
        $anus_changes                    = $obj['change_in_the_anus'] ;
        $blood_in_urine                  = $obj['blood_in_the_urine'] ;
       //------------------------------------------------------------------// 
        $difficulty_urinating            = $obj['difficulty_urinating'] ;
        $urine_flow_control              = $obj['urine_flow_control'] ;
        $fbc_parameters                  = $obj['fbc_parameters'] ;
        $vaginal_dryness                 = $obj['vaginal_dryness'] ;
        //------------------------------------------------------------------//
        $feel_like_urinating            = $obj['feel_like_urinating'] ; 
        $stool_leakage                  = $obj['stool_leakage'] ;
        $watery_stools                  = $obj['watery_stool'] ;

        $on_chemotherap                 = $obj['male_chemotherapy']; 
        //===============================================================//
        $how_often                      = NULL;
        if($on_chemotherap==="YES|YES") { $how_often = $obj['how_often'] ;   }
        //-----------------------------------------------------------------//
        $nausea                         = $obj['nausea'] ;
        $other_info                     = $obj['other_info'] ;
        $painful_urination              = $obj['painful_urination'] ; 
        $urination_rate                 = $obj['urination_rate'] ;
        //-----------------------------------------------------------------// 
        $tired_weak                     = $obj['tired'] ;
        $vomiting                       = $obj['vomiting']; 
        $weight_this_week               = $obj['weight_this_week'] ;
        $dateLogged                     = $obj['date'];
 
        $sql  = "INSERT INTO `female_pelvic_effect`(`userId`, `watery_stools`, `nausea`, `vomiting`, `skin_color`, `anus_changes`, `blood_in_urine`, 
                                                    `difficulty_urinating`, `painful_urination`, `feel_like_urinating`, `urine_flow_control`, 
                                                    `urination_rate`, `vaginal_dryness`, `stool_leakage`, `tired_weak`, `weight`, `fbc_parameters`, 
                                                    `others`, `on_chemotherapy`, `how_frequent`, `dateLogged`, `createdAt`) 
                                            VALUES('$userId','$watery_stools','$nausea','$vomiting','$skin_color','$anus_changes','$blood_in_urine',
                                                   '$difficulty_urinating','$painful_urination','$feel_like_urinating','$urine_flow_control',
                                                   '$urination_rate','$vaginal_dryness','$stool_leakage','$tired_weak','$weight_this_week','$fbc_parameters',
                                                   '$other_info','$on_chemotherap','$how_often','$dateLogged',NOW())";

        
        $query      = $con->query($sql);
        if($query){
            $this->result['msg']   = "success";
        }else{
            $this->result['msg']   = "Error >".$con->error;
        }
        
        echo json_encode($this->result);
    }


}

new FemalePelvicCancer();



?>