<?php
session_start();
include_once './config.php';
include "./core/database.php";
include "./core/Faculty.php";
include "./core/filehandler.php";

use Core\Data\Database;
use Core\Data\FacultyUpload;

if(isset($_FILES['filename']))
{
	echo "inside if";
	
	$fileHandler=new FileHandler($_FILES['filename']);
	if($fileHandler->save())
	{
		// echo "isnide save";
		//$dateOfUpload=date("Y-m-d");
		$timeOfUpload=time();
		$timestamp=date('d/m/Y H:i:s',$timeOfUpload);
		$faculty=new FacultyUpload((new Database())->connect());
		$faculty->time=$timestamp;
		$faculty->fname=$_SESSION['name'];
		$faculty->sname=$_POST['sname'];
		$faculty->dept=$_SESSION['dept'];
		$faculty->year=$_POST['year'];
		$faculty->unit=$_POST['unit'];
		$faculty->docname=$_POST['docname'];
		$faculty->file_name=$fileHandler->name;
		$faculty->file_size=$fileHandler->size;
		
		if($faculty->add() > 0)
		{
			header('Location: addMaterial.php?msg=File%20Registered%20in%20Database');
		}
		else
		{	
			$fileHandler->remove();
			header('Location: addMmaterial.php?msg=Error%20File%20Not%20Saved');
		}
	}
	else{
			header('Location: addMaterial.php?msg=Error%20File%20Not%20Saved');
	}

}
?>