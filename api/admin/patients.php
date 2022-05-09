<?php 
require_once('../common.php');

class Patients{
    use Common;

    private $result = [];

    public function __construct(){ 
        $this->getPatients();
    }


    public function getPatients(){
            $con      = $this->con();  
            $sql      = "SELECT `userId`,`user_type`,`fname`, `lname`, `otherNames`, `age`, `gender`,`cancer_type` FROM `users`";
            $query    = $con->query($sql);
            $userRows = [];
            $i=0;
           if($query){ 
               while($row = $query->fetch_assoc()){
                  $userRows[$i]  = $row;
                  $this->result['msg'] = "success";
                  $i++;
               }
            }else{
                $this->result['msg'] = $con->error; 
            }
            $this->result['data']    = $userRows;
            echo json_encode($this->result);
    }
}

new Patients();


?>