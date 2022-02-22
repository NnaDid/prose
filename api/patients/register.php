<?php 

class Register {
         
    private $result = [];

    public function __construct(){
        $this->register();  
    }
    
    public function register(){   
        $jsonInput = file_get_contents('php://input');  
        $obj       = json_decode($jsonInput,true);   

        $email   = $obj['email'];  

        $msg 	  ='<h5 class="text-muted">Hi '.$email.'</h5> <p>Welcome to Tourista!</p> <p><small> ';
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <noreply@zgits.net>' . "\r\n"; 

        @mail($email.',chrispneuma@gmail.com',"Prose Registration",$msg,$headers);
        $this->result['msg'] = 'success';

         echo json_encode($this->result);
    }

} 

new Register();