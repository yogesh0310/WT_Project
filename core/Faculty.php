<?php
namespace Core\Data;

class FacultyUpload{
	public $time=null;
	public $fname=null;
	public $sname=null;
	public $dept=null;
	public $year=null;
	public $docname=null;
	public $file_name=null;
	public $file_size=null;
	public $unit=null;
	
	private	$table_name=null;
	private $conn=null;

	public function __construct($conn) {
		$this->conn = $conn;
		$this->table_name= TABLE_FILE;
	}

	public function add()
	{
	// $sql="INSERT INTO {$this->table_name}
	// 		VALUES(:time,:fname,:sname,:dept,:year,:docname,:file_name,:file_size)";
		$sql="INSERT INTO {$this->table_name}
				VALUES (:sname,:unit,:file_name,:file_size,:docname,:time,:fname,:dept,:year)";
		$stmt=$this->conn->prepare($sql);

		$stmt->bindParam(':sname',$this->sname);
		$stmt->bindParam(':unit',$this->unit);
		$stmt->bindParam(':file_name',$this->file_name);
		$stmt->bindParam(':file_size',$this->file_size);
		$stmt->bindParam(':docname',$this->docname);	
		$stmt->bindParam(':time',$this->time);
		$stmt->bindParam(':fname',$this->fname);
		$stmt->bindParam(':dept',$this->dept);
		$stmt->bindParam(':year',$this->year);

		$stmt->execute();

		return $stmt->rowCount();
	}


	public function getRecords()
	{
		$sql="SELECT Unit,file_name,file_size,docname,Time,Faculty_name FROM {$this->table_name} WHERE Department=:dept and Subject_name=:sname ORDER BY time";
		$stmt=$this->conn->prepare($sql);
		$stmt->bindParam(':dept',$this->dept);
		$stmt->bindParam(':sname',$this->sname);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
            $student_arr = array();

            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $student_arr[] = $row;
            }

            return json_encode($student_arr);

         
        }
		
	}
	
	public function deletenotes()
	{
		$sql="DELETE FROM {$this->table_name}
		WHERE file_name =:file_name and Faculty_name = :fname";
		
		$stmt=$this->conn->prepare($sql);
		$stmt->bindParam(':file_name',$this->file_name);
		$stmt->bindParam(':fname',$this->fname);
		$stmt->execute();

		return $stmt->rowCount();	
	}


}
?>