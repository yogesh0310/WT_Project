<?php

namespace Core\Data;

class FetchUser {
    public $username;

    private $table_name = null;
    private $conn = null;

     public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE_STUDENT;
    }
    public function fetchUser() {
        
        $sql = "SELECT * FROM {$this->table_name} WHERE Email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email',$this->username);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $student_arr = array();

            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $student_arr[] = $row;
            }

            return $student_arr;

            //return $student_arr;
        }
        
    }
    public function fetchFaculty() {
        $this->table_name=TABLE_FACULTY;
        $sql = "SELECT * FROM {$this->table_name} WHERE Email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email',$this->username);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $student_arr = array();

            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $student_arr[] = $row;
            }

            return $student_arr;

            //return $student_arr;
        }
        
    }
}



?>