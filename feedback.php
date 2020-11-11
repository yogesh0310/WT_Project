<?php

include_once 'config.php';
include_once 'core/Noteshandling.php';
include_once 'core/database.php';

use Core\Data\Noteshandling;
use Core\Data\Database;

$db = new Database();
$feedback = new NotesHandling($db->connect());

$feedback->name=$_POST['name'];
$feedback->email=$_POST['email'];
$feedback->sub=$_POST['subject'];
$feedback->message=$_POST['message'];

if ($feedback->feedback() > 0) {
	header('Location: contact.php?msg=We%20will%20reach%20to%20you%20soon');
}