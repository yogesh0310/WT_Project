<?php
session_start();
include_once './config.php';
include "./core/database.php";
include "./core/Faculty.php";

use Core\Data\Database;
use Core\Data\FacultyUpload;
	
header('Content-type: application/json');



$db=new Database();
$faculty=new FacultyUpload($db->connect());
$faculty->dept=$_GET['dept'];
$faculty->sname=$_GET['sub'];
echo $faculty->getRecords();


?>