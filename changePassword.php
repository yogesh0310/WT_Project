<?php
session_start();
include_once './config.php';
include "./core/database.php";
include "./core/changePassword.php";

use Core\Data\Database;
use Core\Data\ChangeUserPass;

$role=$_GET['role'];
$username=$_SESSION['user'];

$db = new Database();
$change = new ChangeUserPass($db->connect());

$change->username=$username;
$change->password=$_GET['new'];

$response = array(
    "status" => "Failed",
    "message" => "Error in updating the  record"
);
if(isset($role)){
	if($change->changeFacultyPassword() > 0){
		$response['status'] = "Success";
	    $response['message'] = "Record Updated";
	}	
}
else
{
	if($change->changeUserPassword() > 0){
		$response['status'] = "Success";
	    $response['message'] = "Record Updated";
	}
}

	echo $response['status'];

?>
