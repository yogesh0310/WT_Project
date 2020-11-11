<?php
namespace Core\Data;
//include_once './config.php';

class NotesHandling {
    public $name=null;
    public $mobile=null;
    public $email=null;
    public $prn=null;
    public $dob=null;
    public $password=null;

    private $table_name = null;
    private $conn = null;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE;
    }

    public function insertRec()
    {
        try{
        $sql= "INSERT INTO 
                    {$this->table_name} 
               VALUES 
                    (
                        :name,
                        :dob,
                        :prn,
                        :email,
                        :password,
                        :mobile
                    )";
        
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':name',$this->nname);
        $stmt->bindParam(':mobile',$this->mobile);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':dob',$this->dob);
        $stmt->bindParam(':prn',$this->prn);
        $stmt->bindParam(':password',$this->password);
        $result=$stmt->execute();
        }
        catch(PDOException $p){
            echo $p->getMessage();
        }
        if ($result) {
            echo "Success";
        }
        else
        {
            echo "Failed";
        }
        return $stmt->rowCount();
    }
    public function getRecords() {
        $sql = "SELECT * FROM {$this->table_name}";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $student_arr = array();

            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $student_arr[] = $row;
            }

            return json_encode($student_arr);

            //return $student_arr;
        }
        //return $stmt;
    }

    public function update() {
        //echo $this->fname." ".$this->mname." ".$this->lname." ".$this->mobile." ".$this->email." ".$this->college." ".$this->address;
        $sql = "UPDATE
                    {$this->table_name}
                SET
                    Firstname = :fname,
                    Middlename = :mname,
                    Lastname = :lname,
                    Email = :email,
                    Address = :address,
                    College = :college
                WHERE
                    Mobile = :mobile";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':fname',$this->fname);
        $stmt->bindParam(':mname',$this->mname);
        $stmt->bindParam(':lname',$this->lname);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':address',$this->address);
        $stmt->bindParam(':college',$this->college);
        $stmt->bindParam(':mobile',$this->mobile);

        $stmt->execute();

        return $stmt->rowCount();
        
    }

    function delete() {

        $sql = "DELETE FROM {$this->table_name} WHERE Firstname = :fname";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':fname',$this->fname);
        $stmt->execute();

        return $stmt->rowCount();
    }



}
?>