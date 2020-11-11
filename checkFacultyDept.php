<?php
session_start();

$dept=$_GET['dept'];
//$faculty=$_SESSION['faculty'] ?? null;


switch ($dept) {
	case 'ME':
		header('Location: MEUIFaculty.php');
		break;

	case 'CE':
		header('Location: CEUIFaculty.php');
		break;

	case 'CS':
		header('Location: CSUIFaculty.php');
		break;

	case 'IT':
		header('Location: ITUIFaculty.php');
		break;

	case 'ETX':
		header('Location: ETXUIFaculty.php');
		break;

	case 'ENTC':
		header('Location: ENTCUIFaculty.php');
		break;
	
	default:
		header('Location: index.php');
		break;
}

?>