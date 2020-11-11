<?php
include_once './config.php';
include "./core/database.php";
include "./core/NotesHandling.php";

use Core\Data\Database;
use Core\Data\NotesHandling;


$db = new Database();
$insert_entry = new NotesHandling($db->connect());

$insert_entry->name=$_GET['name'] ?? null ;
$insert_entry->mobile=$_GET['mobile'] ?? null ;
$insert_entry->email=$_GET['email'] ?? null ;
$insert_entry->prn=$_GET['faculty_id'] ?? null ;
$insert_entry->dept=$_GET['dept'] ?? null ;
$insert_entry->password=$_GET['password'] ?? null ;

$response = array(
    "status" => "Failed",
    "data" => "Error in inserting the record"
);
if ($insert_entry->insertFaculty() > 0) {
    return true;
}
else{
	return false;
}


?>