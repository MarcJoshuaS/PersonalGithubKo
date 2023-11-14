<?php
class edit extends config {
    public $id;

    public function __construct($id) {
        $this->id = $id;

    }
    public function editTask() {
        $con = $this->con();
        $sql = "UPDATE `tbl-todolist` SET `status`='COMPLETED',`date_completed` = NOW() where `id` = '$this->id'";
        $data = $con->prepare($sql);
  
        if($data->execute()){
            return true;
        }else{
            return false;
        }
        
    }
}   

?>