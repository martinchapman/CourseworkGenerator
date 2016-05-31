<?php

include("CourseworkTemplate.php");

$dictionary = array();

$assignment1 = new Coursework;

$assignment1->outputFile($student->get_email(), $student->get_email(), "guidelines", $dictionary, "CSnUsTh4/ContinuousAssessmentGuidelines.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");

$assignment1->outputFile($student->get_id(), $student->get_email(), "guidelines", $dictionary, "CSnUsTh4/ContinuousAssessmentGuidelines.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRP/distribute/" . $assignment1->get_url() . "'>Download</a>";
	
?>
