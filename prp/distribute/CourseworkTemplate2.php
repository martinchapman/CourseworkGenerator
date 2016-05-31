<?php

if (empty($_POST)) die();

include("Coursework-New.php");
include("Student.php");
include("Utilities.php");

$utils = new Utilities;

//$utils->deleteAll();

$student = new Student($_POST, "BEHeNSx3/");
	
?>
