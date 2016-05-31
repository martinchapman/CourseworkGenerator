<?php

include("CourseworkTemplate2.php");

$spearman = array(
	"Spearman",
	"Pikeman",
	"Lancer",
	"Skirmisher",
	"Halberdier"
);

$archer = array(
	"Archer",
	"Crossbowman",
	"Arbalist",
	"Longbowman",
	"Bowman"
);

$knight = array(
	"Knight",
	"Cuirassier",
	"Cavalier",
	"Cataphract",
	"Clibanarii"
);

$rand_spearman = array_rand($spearman);

$rand_archer = array_rand($archer);

$rand_knight = array_rand($knight);

$chosen_spearman = $spearman[$rand_spearman];

$chosen_archer = $archer[$rand_archer];

$chosen_knight = $knight[$rand_knight];

$dictionary = array(
    "_Spearman_" => $chosen_spearman, //$student->get_firstname(),
	"_SmanArticle_" => explode(" ", preg_replace('/\b(a)\s+([aeiou])/i', '$1n $2', "a " . $chosen_spearman))[0],
    "_Archer_" => $chosen_archer, //$student->get_surname(),
	"_ArcArticle_" => ucfirst(explode(" ", preg_replace('/\b(a)\s+([aeiou])/i', '$1n $2', "a " . $chosen_archer))[0]),
	"_Knight_" => $chosen_knight,
	"_KniArticle_" => explode(" ", preg_replace('/\b(a)\s+([aeiou])/i', '$1n $2', "a " . $chosen_knight))[0],
	"_KniSpeed_" => mt_rand(5*10, 6*10) / 10,
	"_SmanSpeed_" => mt_rand(4*10, 5*10) / 10,
	"_ArcSpeed_" => mt_rand(12*10, 13*10) / 10,
	"_ArcRange_" => mt_rand(10*10, 11*10) / 10	
);

$assignment3 = new Coursework;

$assignment3->outputFile($student->get_email(), $student->get_email(), "coursework3", $dictionary, "CSnUsTh4/Assignment3.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaining exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the third piece of coursework is released, and I'll give you full marks on the third piece of coursework. -->");

$assignment3->outputFile($student->get_id(), $student->get_email(), "coursework3", $dictionary, "CSnUsTh4/Assignment3.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRP/distribute/" . $assignment3->get_url() . "'>Download</a>";

?>
