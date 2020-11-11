<?php

namespace Core\Data;

class DeleteUser {
    public $username;

    private $table_name = null;
    private $conn = null;

     public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE;
    }
    public function deleteUser() {
        
        $sql = "DELETE FROM  {$this->table_name} WHERE Email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email',$this->username);
        $res=$stmt->execute();
        if($res){
        	return true;
        }
        else{
        	return false;
        }
        
    }
}



?>