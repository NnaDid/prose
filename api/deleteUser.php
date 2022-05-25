

<?php
  require_once("./common.php");

   class DeleteUser{
         use Common;
         private $result =[];

            public function __construct(){ 
                $jsonInput = file_get_contents('php://input');
                $obj       = json_decode($jsonInput,true);  
                $uid       = $obj['uid'];  // id of the user to be deleted
                $this->deleteUser($uid);
            }


            private function deleteUser($uid){
                $con   =  $this->con();
                $query = $con->query("DELETE FROM `users` WHERE `userId` ='$uid'");
                if($query){
                    $this->result['status'] = "success";
                }else{
                    $this->result['status'] = "Error";
                }
                $con->close();

                echo json_encode($this->result);
            }

   }
 new DeleteUser();

?>