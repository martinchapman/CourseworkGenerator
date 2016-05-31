<?php

include("CourseworkTemplate.php");

$hackers = array(
	"Mr Robot",
	"Elliot",
	"Darlene",
	"Romero",
	"Mobley",
	"Trenton",
	"Cisco"
);

$rand_hacker = array_rand($hackers);

$gender_upper = "He";

$gender_lower = "he";

$gender_possessive = "his";

if ($hackers[$rand_hacker] == 'Darlene' || $hackers[$rand_hacker] == 'Trenton') {
	
	$gender_upper = "She";
	
	$gender_lower = "she";
	
	$gender_possessive = "her";
}

$keys = array(
	"123456",
	"password",
	"12345",
	"1234",
	"football",
	"qwerty",
	"1234567890",
	"1234567",
	"princess",
	"solo"
);

$rand_keypass = array_rand($keys);

$dictionary = array(
    "_Mac_" => implode(':',str_split(substr(md5(mt_rand()),0,12),2)),
	"_Key_" => $keys[$rand_keypass],
	"_Hacker_" => $hackers[$rand_hacker],
	"_GenderUpper_" => $gender_upper,
	"_GenderLower_" => $gender_lower,
	"_GenderPossessive_" => $gender_possessive
);

$assignment4 = new Coursework;

$assignment4->outputFile($student->get_email(), $student->get_email(), "coursework4", $dictionary, "CSnUsTh4/Assignment4.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaining exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the fourth piece of coursework is released, and I'll give you full marks on the fourth piece of coursework. These marks will only be awarded once. -->");

$assignment4->outputFile($student->get_id(), $student->get_email(), "coursework4", $dictionary, "CSnUsTh4/Assignment4.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRP/distribute/" . $assignment4->get_url() . "'>Download</a>";

?>
