<?php
session_start();
require_once('../../common.php');

class MalePelvicCancer{
    use Common;

    private $result = [];

    public function __construct(){
          $this->addSideEffects(); 
    }

    /*
`userId`, `blood_in_urine`, `urinating_difficulty`, `painful_urination`, `urination_rate`, `feel_like_urinating`, `urine_flow_control`, `nauea`,
 `vomiting`, `watery_stool`, `blood_from_anus`, `stooling_difficulty`, `night_belly_full`, `stool_leakage`, `maintain_erection`, `sperm_releasing_diff`, 
`dc_sexual_desire`, `painful_sex`, `tired_weak`, `weight_this_week`, `fbc_parameters`, `other_side_effeccts`, `on_chemotherap`, `createdAt`
    */


    public function addSideEffects(){
        $con        = $this->con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true); 
        //===============================================//
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId     = $this->getUserByEmail($email)['userId'];
        //------------------------------------------------------------------//
        $maintain_erection              = $obj['achieve_and_maintain_erection'];
        $belly_full_at_night            = $obj['belly_full_at_night'] ;
        $blood_from_the_anus            = $obj['blood_from_the_anus'] ;
        $blood_in_urine                 = $obj['blood_in_urine'] ;
        $change_in_the_anus             = $obj['change_in_the_anus']; 
        //----------------------------------------------------------------//
        $urine_flow_control            = $obj['control_of_urine_flow'] ;
        $dc_sexual_desire              = $obj['decreased_sexual_desire'] ;
        $difficulty_in_urinating        = $obj['difficulty_in_urinating']; 
        $difficulty_stooling            = $obj['difficulty_stooling']; 
        $fbc_parameters                 = $obj['fbc_parameters'] ;
        //------------------------------------------------------------------//
        $feel_like_urinating            = $obj['feel_like_urinating'] ; 
        $stool_leakage                  = $obj['leakage_stool'] ;
        $loose_or_watery_stools         = $obj['loose_or_watery_stools'] ;

        $on_chemotherap                 = $obj['male_chemotherapy']; 
        //===============================================================//
        $how_often                      = NULL;
        if($on_chemotherap==="YES|YES") { $how_often = $obj['how_often'] ;   }
        //-----------------------------------------------------------------//
        $nausea                         = $obj['nausea'] ;
        $other_side_effeccts            = $obj['other_info'] ;
        $painful_urination              = $obj['painful_urination'] ;
        $painful_sex                    = $obj['pasinful_sex'] ;
        $urination_rate                 = $obj['rate_of_urination'] ;
        //-----------------------------------------------------------------//
        $sperm_releasing_diff           = $obj['sperm_release_difficulty'];
        $tired_weak                     = $obj['tired'] ;
        $vomiting                       = $obj['vomiting']; 
        $weight_this_week               = $obj['weight_this_week'] ;

        $dateLogged                    = $obj['date'];
 
        $sql  = "INSERT INTO `male_pelvic`(`userId`, `blood_in_urine`, `urinating_difficulty`, `painful_urination`, `urination_rate`, 
                                            `feel_like_urinating`, `urine_flow_control`, `nauea`,`vomiting`, `watery_stool`, `blood_from_anus`,`changes_in_the_anus`, 
                                            `stooling_difficulty`, `night_belly_full`, `stool_leakage`, `maintain_erection`, `sperm_releasing_diff`, 
                                            `dc_sexual_desire`, `painful_sex`, `tired_weak`, `weight_this_week`, `fbc_parameters`, `other_side_effeccts`, 
                                            `on_chemotherap`, `how_often`,`dateLogged`,`createdAt`) 
                                    VALUES('$userId','$blood_in_urine','$difficulty_in_urinating','$painful_urination','$urination_rate', 
                                            '$feel_like_urinating','$urine_flow_control','$nausea','$vomiting','$loose_or_watery_stools','$blood_from_the_anus','$change_in_the_anus',
                                            '$difficulty_stooling','$belly_full_at_night','$stool_leakage','$maintain_erection','$sperm_releasing_diff',
                                            '$dc_sexual_desire','$painful_sex','$tired_weak','$weight_this_week','$fbc_parameters','$other_side_effeccts',
                                            '$on_chemotherap','$how_often','$dateLogged',NOW())";

        
        $query      = $con->query($sql);
        if($query){
            $this->result['msg']   = "success";
        }else{
            $this->result['msg']   = "Error >".$con->error;
        }
        
        echo json_encode($this->result);
    }


}

new MalePelvicCancer();



?>