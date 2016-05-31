<?php

include("CourseworkTemplate.php");

$dictionary = array();

$assignment4 = new Coursework;

$assignment4->outputFile($student->get_email(), $student->get_email(), "coursework4", $dictionary, "CSnUsTh4/Assignment3.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the fourth piece of coursework is released, and I'll give you full marks on the third piece of coursework. -->");

$assignment4->outputFile($student->get_id(), $student->get_email(), "coursework4", $dictionary, "CSnUsTh4/Assignment4.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRA/distribute/" . $assignment4->get_url() . "'>Download</a>";
	
?>
