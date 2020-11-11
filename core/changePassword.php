<?php

namespace Core\Data;

class ChangeUserPass {
    public $username;
    public $password;

    private $table_name = null;
    private $conn = null;

     public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE_STUDENT;
    }
    public function changeUserPassword() {
        $sql = "UPDATE
                    {$this->table_name}
                SET
                    Password=:password
                WHERE
                    Email = :email";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':password',$this->password);
        $stmt->bindParam(':email',$this->username);
        

        $stmt->execute();

        return $stmt->rowCount();
       
    }
    public function changeFacultyPassword() {
        $this->table_name=TABLE_FACULTY;
        $sql = "UPDATE
                    {$this->table_name}
                SET
                    Password=:password
                WHERE
                    Email = :email";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':password',$this->password);
        $stmt->bindParam(':email',$this->username);
        

        $stmt->execute();

        return $stmt->rowCount();
       
    }
}



?>