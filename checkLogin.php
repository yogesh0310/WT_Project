<?php
session_start();

include_once './config.php';
include "./core/database.php";
include "./core/auth.php";
include "./core/authFaculty.php";

use Core\Data\Database;
use Core\Data\User;
use Core\Data\Faculty;

$req = $_GET['req'] ?? "home";
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
$email=$_POST["lemail"];
$pass=$_POST["lpassword"];
if (isset($_POST['faculty'])) {
    $faculty=$_POST['faculty'];
    $req="authFaculty";
}
echo $faculty;



switch ($req) {
    
    case 'auth':
    	echo "inside";
        

        $db = new Database();
        $u = new User($db->connect());

        //$u = new User();
        $u->username = $email;
        $u->password = $pass;
        $u->role=$faculty ?? null;
        //echo ;
        if ($u->checkUser()) {
            $_SESSION['user'] = $u->username;
            $_SESSION['dept'] = $u->department;
            $_SESSION['faculty'] = "yes";
            //echo "user authenticated";
            header("Location: checkUserDept.php?dept={$_SESSION['dept']}");
            echo "session is".$_SESSION['user'];
        }else {
            header('Location: index.php?err=Invalid%20Details');
        }
        break;

        case 'authFaculty':
            $db = new Database();
            $f = new Faculty($db->connect());

            //$u = new User();
            $f->username = $email;
            $f->password = $pass;
            //echo ;
            if ($f->checkUser()) {
                $_SESSION['user'] = $f->username;
                $_SESSION['dept'] = $f->department;
                $_SESSION['name'] = $f->name;
                //$_SESSION['faculty'] = "yes";
                //echo "user authenticated";
                header("Location: checkFacultyDept.php?dept={$_SESSION['dept']}");
               // echo "session is".$_SESSION['user'];
            }else {
                header('Location: index.php?err=Invalid%20Faculty%20Details');
            }
            break;
}

// require 'common/header.php';
// require $template;
// require 'common/footer.php';

?>