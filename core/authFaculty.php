<?php
namespace Core\Data;

class Faculty {
    public $username;
    public $password;
    public $department;
    public $role;
    public $name;

    private $table_name = null;
    private $conn = null;


    public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE_FACULTY;
        
    }
    public function checkUser() {
        echo "inside fun";
        echo $this->username." ".$this->password;
        $sql = "SELECT Email,Password,Department,Name FROM {$this->table_name} WHERE Email=:email and Password=:password";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email',$this->username);
        $stmt->bindParam(':password',$this->password);
        $stmt->execute();
        
        $r = $stmt->fetch();
        $this->department=$r["Department"];
        $this->name=$r["Name"]; 
        if($r["Email"] == null){
            return false;
        }
        else
        {
            return true;
        }
    }
}

?>