<?php
namespace Core\Data;
//include_once './config.php';

class NotesHandling {
    public $name=null;
    public $mobile=null;
    public $email=null;
    public $prn=null;
    public $dept=null;
    public $password=null;
    public $year=null;
    public $sub=null;
    public $message=null;

    private $table_name = null;
    private $conn = null;
    
    public function __construct($conn) {
        $this->conn = $conn;
        $this->table_name = TABLE_STUDENT;
    }

    public function insertRec()
    {
        // echo $this->name." ".$this->dept." ".$this->prn." ".$this->email." ".$this->password." ".$this->mobile." ".$this->year;
        try{
        $sql= "INSERT INTO 
                    {$this->table_name} 
               VALUES 
                    (
                        :name,
                        :email,
                        :mobile,
                        :prn,
                        :password,
                        :dept,
                        :year
                    )";
        
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':mobile',$this->mobile);
        $stmt->bindParam(':prn',$this->prn);
        $stmt->bindParam(':password',$this->password);
        $stmt->bindParam(':dept',$this->dept);
        $stmt->bindParam(':year',$this->year);
        
        $result=$stmt->execute();
        echo $result;
        }
        catch(PDOException $p){
            echo $p->getMessage();
        }
        return $result;
    }
    public function insertFaculty()
    {
        $this->table_name=TABLE_FACULTY;
        // echo $this->name." ".$this->dept." ".$this->prn." ".$this->email." ".$this->password." ".$this->mobile." ".$this->year;
        try{
        $sql= "INSERT INTO 
                    {$this->table_name} 
               VALUES 
                    (
                        :name,
                        :email,
                        :prn,
                        :mobile,
                        :password,
                        :dept
                    )";
        
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':prn',$this->prn);
        $stmt->bindParam(':mobile',$this->mobile);
        $stmt->bindParam(':password',$this->password);
        $stmt->bindParam(':dept',$this->dept);
        
        $result=$stmt->execute();
        echo $result;
        }
        catch(PDOException $p){
            echo $p->getMessage();
        }
        return $result;
    }
    public function getSubjectNames()
    {
        $sql=" SELECT DISTINCT Subject_name from material_store WHERE Department= :dept";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':dept',$this->dept);
        $stmt->execute();
        $r = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $r;
    }
    public function getSubjectNamesByFaculty()
    {
        $sql=" SELECT DISTINCT Subject_name from material_store WHERE Faculty_name = :fname";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':fname',$this->name);
        $stmt->execute();
        $r = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $r;
    }
    public function feedback()
    {
        $this->table_name=TABLE_FEEDBACK;
        // echo $this->name." ".$this->dept." ".$this->prn." ".$this->email." ".$this->password." ".$this->mobile." ".$this->year;
        try{
        $sql= "INSERT INTO 
                    {$this->table_name} 
               VALUES 
                    (
                        :name,
                        :email,
                        :sub,
                        :msg
                    )";
        
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':sub',$this->sub);
        $stmt->bindParam(':msg',$this->message);
        
        $result=$stmt->execute();
        echo $result;
        }
        catch(PDOException $p){
            echo $p->getMessage();
        }
        return $result;
    }
}
?>