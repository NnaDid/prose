<?php
session_start();
require_once('../../common.php');

class BreastcCancer{
    use Common;

    private $result = [];

    public function __construct(){
          $this->addSideEffects(); 
    }

    /*
`userId`,`armpit_hair_loss`,`arm_swelling`,`swalloging_difficulty`,`pain_in_chest_wall`, 
`breast_swelling`,`breast_pain`,`sensation_loss`,`skin_color_changes`,`tired_weak`, 
`weight_this_week`, `fbc_parameters`, `other_info`, `dateLogged`, `createdAt`
    */


    public function addSideEffects(){
        $con        = $this->con();
        $jsonInput  = file_get_contents('php://input');  
        $obj        = json_decode($jsonInput,true); 
        //===============================================//
        $email      = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
        $userId     = $this->getUserByEmail($email)['userId'];

        //------------------------------------------------------------------//     
        $arm_swelling          = $obj['arm_swelling'] ;
        $breast_pain           = $obj['breast_pain'] ;
        $breats_swelling       = $obj['breats_swelling'] ;
        $chest_wall_pain       = $obj['chest_wall_pain'] ;
        $date                  = $obj['date'] ;
        $fbc_parameters        = $obj['fbc_parameters'] ;
        $hair_loss             = $obj['hair_loss'] ;
        $other_info            = $obj['other_info'] ;
        $sensation_loss        = $obj['sensation_loss'] ;
        $skin_color            = $obj['skin_color'] ;
        $swallowing_difficulty = $obj['swallowing_difficulty'] ;
        $tired                 = $obj['tired'] ;
        $weight_this_week      = $obj['weight_this_week'] ;

        // check if the user has logged this date already
        $sql  ="";
        $check = $con->query("SELECT * FROM `breast_cancer` WHERE `userId` ='$userId' AND `dateLogged` ='$date'");
        if($check->num_rows>0){
            $sql  ="UPDATE `breast_cancer` SET `armpit_hair_loss`='$hair_loss',
                                               `arm_swelling`='$arm_swelling',
                                               `swalloging_difficulty`='$swallowing_difficulty',
                                               `pain_in_chest_wall`='$chest_wall_pain',
                                               `breast_swelling`='$breats_swelling',
                                               `breast_pain`='$breast_pain',
                                               `sensation_loss`='$sensation_loss',
                                               `skin_color_changes`='$skin_color',
                                               `tired_weak`='$tired',
                                               `weight_this_week`='$weight_this_week',
                                               `fbc_parameters`='$fbc_parameters',
                                               `other_info`='$other_info',
                                               `createdAt`=NOW()
                                                WHERE `userId` ='$userId' AND `dateLogged` ='$date'
                                               ";
        }else{
            $sql  .= "INSERT INTO `breast_cancer`(`userId`,`armpit_hair_loss`,`arm_swelling`,`swalloging_difficulty`,
                                                `pain_in_chest_wall`,`breast_swelling`,`breast_pain`,`sensation_loss`,
                                                `skin_color_changes`,`tired_weak`,`weight_this_week`, `fbc_parameters`, 
                                                `other_info`, `dateLogged`, `createdAt`) 
                                            VALUES('$userId','$hair_loss','$arm_swelling','$swallowing_difficulty',
                                                    '$chest_wall_pain','$breats_swelling','$breast_pain','$sensation_loss',
                                                    '$skin_color','$tired','$weight_this_week','$fbc_parameters',
                                                    '$other_info','$date',NOW())";
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

new BreastcCancer();



?>