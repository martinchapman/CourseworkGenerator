<?php

include("CourseworkTemplate.php");

$messages = array(
   'PRA',
   'GUI',
   'space',
   'rover',
   'method',
   'NASA',
   'code',
   'hex',
   'Java',
   'Swing',
   'MVC',
   'Mars',
   'planet',
   'star',
   'Kings',
   'college',
   'London'
);

$rand_message = array_rand($messages);

$dictionary = array(
    '_SentWord_' => $messages[$rand_message]
);

$assignment2 = new Coursework;

$assignment2->outputFile($student->get_email(), $student->get_email(), "coursework2", $dictionary, "CSnUsTh4/Assignment2.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");

$assignment2->outputFile($student->get_id(), $student->get_email(), "coursework2", $dictionary, "CSnUsTh4/Assignment2.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRA/distribute/" . $assignment2->get_url() . "'>Download</a>";
	
?>
