<?php

include("CourseworkTemplate.php");

$dictionary = array(
    "_Firstname_" => $student->get_firstname(),
    "_Surname_" => $student->get_surname(),
);

$assignment1 = new Coursework;

$assignment1->outputFile($student->get_email(), $student->get_email(), "coursework1", $dictionary, "CSnUsTh4/Assignment1.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");

$assignment1->outputFile($student->get_id(), $student->get_email(), "coursework1", $dictionary, "CSnUsTh4/Assignment1.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRP/distribute/" . $assignment1->get_url() . "'>Download</a>";
	
?>
