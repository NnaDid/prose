<?php
session_start();
require_once("api/common.php");
$base->logOut();
//-------------------------------------------------------------------------------
$email          = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
$phone          = $base->getUserByEmail($email)['phone'];
$fname          = $base->getUserByEmail($email)['fname'];
$userId         = $base->getUserByEmail($email)['userId'];
//-------------------------------------------------------------------------------
$cancer_type    = $base->getUserByEmail($email)['cancer_type'];
//-------------------------------------------------------------------------------

//------------------------------------------------------------------------------


//------------------------------------------------------------------------------
?>
 