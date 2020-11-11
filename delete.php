<?php
session_start();
include_once './config.php';
include "./core/database.php";
include "./core/auth.php";
include './core/delete.php';

use Core\Data\Database;
use Core\Data\DeleteUser;
$username=$_SESSION['user'];

$db = new Database();
$du = new DeleteUser($db->connect());

$du->username=$username;
if ($du->deleteUser()) {
    session_destroy();
    //echo "user authenticated"
    header('Location: index.php?msg=Account%20Deleted%20Successfully');
}



echo $username;


?>