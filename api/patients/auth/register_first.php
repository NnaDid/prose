<?php 
session_start();
require_once('../../common.php');

class Register {
                 
    use Common;

    private $result = [];

    public function __construct(){
        $this->register();  
    }
    

    // `userId`, `user_type`, `email`, `paswd`, `profile_pix_url`, `licence_url`, `fname`, `lname`, `dob`, `age`, `gender`,
    // `education_level`, `phone`, `country`, `residence_state`, `town`, `tribe`, `religion`, `incom_level`, `cancer_type`,
    // `device_type`, `effect_reporter`, `care_giver_relationship`,`email_status`, `hospital`, `folioNumber`, `specialty`,
    // `managing_team`, `professional_bio`, `createdAt`, `updatedAt`

    public function register(){   
        $con       = self::con();
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);   

        $email     = $obj['email'];  
        $pass      = $obj['p1']; 
        $pass2     = $obj['p2']; 
        $userType  = $obj['userType']; 

        if($pass!==$pass2){ die(json_encode(['msg'=>"OOPs!!! Password Did not match"]));}

        $hassPass  = password_hash($pass,PASSWORD_DEFAULT);
      
      if(!self::exists($email,"users","email")){ 
                $sql      = "INSERT INTO `users`(`email`,`user_type`,`paswd`,`createdAt`) VALUES('$email','$userType','$hassPass',NOW())";
                $statment = $con->query($sql);
                if($statment){
                    $_SESSION["PROSE_CARE__USER_EMAIL"]	  = $email;  

                    $msg 	  ='<h5 class="text-muted">Hi!</h5> 
                                 <p>Thank you for signing up to PROSECare .
                                    Kindly verify your email to enable you proceed with the reporting of your side effects.
                                    We encourage you to promptly report your side effects.
                                 <p>
                                 <p>Click on this link to continue: <a href="https://prosecare.com/patient/signUp/verify.php?email='.$email.'">https://prosecare.com/patient/signUp/verify.php?email='.$email.'</a></p>
                                 <p>Please contact us if you have any questions or concerns via info@prosecare.com
                                     Thank you
                                </p>
                                <p>PROSECare Team </p>';

                    $headers  = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <noreply@prosecare.com>' . "\r\n";  
                    @mail($email.',chrispneuma@gmail.com',"ProseCare Registration",$msg,$headers);
                    $this->result['msg'] = 'success';

                }else{
                    $this->result['msg'] = 'Error Ocured Please contact admin';
                }

        }else{
            $this->result['msg'] = 'User Already exist';
        }

         echo json_encode($this->result);
    }

} 

new Register();