<?php

$filename     = $_FILES['file']['name'];
$fileTemp     = $_FILES['file']['temp_name'];
$file_up_name = time().$filename;
$file_up_path = "../../patients/assets/consent/";
if(is_uploaded_file($fileTemp)){
    move_uploaded_file($fileTemp, "../../patients/assets/consent/".$file_up_name);
}

?>  