<?php
session_start();
include_once './config.php';
include "./core/database.php";
include './core/delete.php';
include './core/filehandler.php';
include './core/Faculty.php';

use Core\Data\Database;
use Core\Data\FacultyUpload;
	
$Handler=new FileHandler();
$db=new Database();
$faculty=new FacultyUpload($db->connect());

$faculty->file_name=$_POST['fname'];
$faculty->fname=$_SESSION['name'];

$Handler->name=$_POST['fname'];
$Handler->remove();
if($faculty->deletenotes() > 0){
	header('Location: editNotes.php?msg=File%20Deleted%20Successfully');
}
?>