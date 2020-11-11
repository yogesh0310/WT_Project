<?php
session_start();

$dept=$_GET['dept'];
//$faculty=$_SESSION['faculty'] ?? null;


switch ($dept) {
	case 'ME':
		header('Location: MEUI.php');
		break;

	case 'CE':
		header('Location: civilUI.php');
		break;

	case 'CS':
		header('Location: CSUI.php');
		break;

	case 'IT':
		header('Location: itUI.php');
		break;

	case 'ETX':
		header('Location: etxUI.php');
		break;

	case 'ENTC':
		header('Location: entcUI.php');
		break;
	
	case 'CM':
		header('Location: chemUI.php');
		break;
	
	default:
		header('Location: main.php');
		break;
}

?>