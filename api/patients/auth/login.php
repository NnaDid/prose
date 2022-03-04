<?php
session_start();
require_once('../../common.php');

class Login {
        
    use Common;

    private $result = [];
    
    public function __construct(){
        $this->login();
    }

    private function login(){ 
        $con       = self::con();
        if(!isset($_POST['token']) || !isset($_SESSION['zgits_csrf_token'])){  die(json_encode(['msg'=>"Invalid Token"]));  }
        
        if($_POST['token']==$_SESSION['zgits_csrf_token']){
            // check if token has expired zgits_csrf_expires
            if(time()>=$_SESSION['zgits_csrf_expires']){  die(json_encode(['msg'=>"OOPs!!! Please reload your page"])); }

                $email_phone = trim($_POST['email_Phone_login']);
                $pass  	     = trim($_POST['pwd_login']);

                if(self::exists($email_phone,"users","email") || self::exists($email_phone,"users","phone")){ 

                    $sql  		= "SELECT * FROM `users` WHERE `email`=? OR `phone`=?";
                    $stmt 		= $con->prepare($sql);
                    $stmt->bind_param("ss",$email_phone,$email_phone);  
    
                    if($stmt->execute()){
                        $result	  = $stmt->get_result();
                        $row      = $result->fetch_assoc();
                    if(password_verify($pass,$row['pwd'])){
                        $user 	  = $_SESSION["zGITS_USER_EMAIL"]	    = $row['email'];
                        $uid      = $_SESSION["zGITS_USER_ID"]          = $row['id'];
                        $phone    = $_SESSION["zGITS_USER_PHONE_ID"]    = $row['phone'];
    
                    if(isset($user) && isset($uid) && isset($phone)){
                        $this->result['msg'] = "success"; 
                        unset($_SESSION['zgits_csrf_token']);
                        unset($_SESSION['zgits_csrf_token']);
                    }else{
                        $this->result['msg'] = "Sorry No Session Was set at this time";
                    }
                    }else{
                        $this->result['msg'] = "Incorrect Password".$stmt->error;
                    }
    
                    }

                }else{
                    die(json_encode(['msg'=>"Wrong Email or Phone Number"]));
                }	 
                    
         }

        $con->close();
        echo json_encode($this->result);
    }
    


}

$login = new Login();