<?php

include("CourseworkTemplate.php");

$dictionary = array();

$assignment3 = new Coursework;

$assignment3->outputFile($student->get_email(), $student->get_email(), "coursework3", $dictionary, "CSnUsTh4/Assignment3.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the fourth piece of coursework is released, and I'll give you full marks on the third piece of coursework. -->");

$assignment3->outputFile($student->get_id(), $student->get_email(), "coursework3", $dictionary, "CSnUsTh4/Assignment3.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRA/distribute/" . $assignment3->get_url() . "'>Download</a>";
	
?>
