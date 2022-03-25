<?php
session_start();
require_once("api/common.php");
$base->logOut();
//-------------------------------------------------------------------------------
$email          = $_SESSION["PROSE_CARE__USER_EMAIL"]; 
//------------------------------------------------------------------------------
$phone          = $base->getUserByEmail($email)['phone'];
$fname          = $base->getUserByEmail($email)['fname'];
$lname          = $base->getUserByEmail($email)['lname'];
$userId         = $base->getUserByEmail($email)['userId'];
//-------------------------------------------------------------------------------
$cancer_type    = $base->getUserByEmail($email)['cancer_type'];
//-------------------------------------------------------------------------------


//------------------------------------------------------------------------------
$dob                = $base->getUserByEmail($email)['dob'];
$age                = $base->getUserByEmail($email)['age'];
$gender             = $base->getUserByEmail($email)['gender'];
$education_level    = $base->getUserByEmail($email)['education_level'];
$country            = $base->getUserByEmail($email)['country'];
$residence_state    = $base->getUserByEmail($email)['residence_state'];
//------------------------------------------------------------------------------
$town               = $base->getUserByEmail($email)['town'];
$tribe              = $base->getUserByEmail($email)['tribe'];
$religion           = $base->getUserByEmail($email)['religion'];
//-----------------------------------------------------------------------------
$incom_level               = $base->getUserByEmail($email)['incom_level'];
$device_type               = $base->getUserByEmail($email)['device_type'];
$effect_reporter           = $base->getUserByEmail($email)['effect_reporter'];
$care_giver_relationship   = $base->getUserByEmail($email)['care_giver_relationship'];
//-----------------------------------------------------------------------------
$pin_no                    = $base->getUserByEmail($email)['pin_no'];
$hospital                  = $base->getUserByEmail($email)['hospital'];
$folioNumber               = $base->getUserByEmail($email)['folioNumber'];
$specialty                 = $base->getUserByEmail($email)['specialty'];
$managing_team             = $base->getUserByEmail($email)['managing_team'];
$professional_bio          = $base->getUserByEmail($email)['professional_bio'];

// `userId`, `user_type`, `email`, `paswd`, `profile_pix_url`, `consent_doc_url`, `licence_url`, `fname`, `lname`, `dob`, `age`, `gender`, 
// `education_level`, `phone`, `country`, `residence_state`, `town`, `tribe`, `religion`, `pin_no`, `incom_level`, `cancer_type`, `device_type`, 
// `effect_reporter`, `care_giver_relationship`, `mgt_team`, `email_status`, `hospital`, `folioNumber`, `specialty`, `managing_team`, 
// `professional_bio`, `createdAt`, `updatedAt`

//------------------------------------------------------------------------------
?>
 