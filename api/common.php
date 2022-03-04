<?php

trait Common{
    public $host = "localhost" ?? "localhost";
    public $user = "root"      ?? "proseDbUser";
    public $pass = ""          ?? "prosePassword";
    public $db   = "prose"     ?? "proseOnlineDb";

public function con(){
    $con = new mysqli($this->host,$this->user,$this->pass,$this->db);
    if ($con->connect_errno) die(" Connection not established");
    return $con ;
}

// Return User Details as Associative array
public function getUserByEmail($email){
    $con        = $this->con();
    $queryRow   = $con->query("SELECT * FROM `users` WHERE `email` ='$email'")->fetch_assoc();
    return  $queryRow;
}

// Get User/member details by ID
public function getUserById($uid){
    $con        = $this->con();
    $queryRow   = $con->query("SELECT * FROM `users` WHERE `id` ='$uid'")->fetch_assoc();
    return  $queryRow;
}



// Get User/member details by userId
public function getUserByUserId($userId){
    $con        = $this->con();
    $queryRow   = $con->query("SELECT * FROM `users` WHERE `userId` ='$userId'")->fetch_assoc();
    return  $queryRow;
}

    // Get User/member details by Phone number
public function getUserByPhone($phone){
    $con        = $this->con();
    $queryRow   = $con->query("SELECT * FROM `users` WHERE `phone` ='$phone'")->fetch_assoc();
    return  $queryRow;
}

// Get Referrer Id by userId from referal table
private function getRefererIdByUserId($userId){
    $con        = $this->con();
    $queryRow   = $con->query("SELECT * FROM `referral` WHERE `userId` ='$userId'")->fetch_assoc();
    return  $queryRow;
}
 

public function exists($val,$table,$col){
    $con     = $this->con();
    if(!empty($val)){
    $sql       = "SELECT * FROM `".$table."` WHERE `".$col."`=?";
    $stmt      = $con->prepare($sql);
    $stmt->bind_param("s",$val);
    $exec      = $stmt->execute();
    if($exec){
    $result   = $stmt->get_result();
    $num_rows = $result->num_rows;
    if($num_rows>0){
        return true;
    }else{
        return false;
    }
    $stmt->close();
    }
    }
}

//-----------------------------------------------------//
public function checkLoggedIn($loc){
    if(!isset($_SESSION["zGITS_USER_EMAIL"])){
        header("location:$loc");
    }
    
    if(isset($_SESSION["zGITS_USER_EMAIL"])){
      if(isset($_GET['u']) && $_GET['u']=="logout"){ 
        unset($_SESSION["zGITS_USER_EMAIL"]);
        session_destroy(); 
        header("location:$loc");
      }
    }
}

// Logout From all sessions set zGITS_USER_EMAIL
public function logOut(){  
    $this->checkLoggedIn("../index.php"); 
}


}

// include_once 'admin/index.php';
// // Use this as a base class
// class  Base extends Admin{
//     use Common;

// }

// $base = new Base();


?>