<?php

include("CourseworkTemplate.php");

$heroes = array(
    "Iron Man",
	"Thor",
	"Spiderman",
	"Captain America",
	"Black Widow",
	"Hulk",
	"Storm",
	"The Human Torch",
	"The Invisible Woman",
	"Thing",
	"Mister Fantastic",
	"Black Panther",
	"Hawkeye",
	"War Machine",
	"Vision",
	"Ant Man",
	"Falcon",
	"Captain Marvel",
	"Cyclops",
	"Beast",
	"Emma Frost",
	"Iceman",
	"Gambit",
	"Jean Grey",
	"Jubilee",
	"Night Crawler",
	"Rogue",
	"Wolverine",
	"Drax",
	"Gamora",
	"Groot",
	"Rocket Raccoon",
	"Star Lord",
	"Daredevil",
	"Deadpool",
	"Colossus",
	"Kitty Pryde",
	"Elektra",
	"Punisher",
	"Blade",
	"Winter Soldier",
	"Quicksilver",
	"Scarlet Witch",
	"Doctor Strange",
	"Jessica Jones"
);

$rand_heroes = array_rand($heroes, 2);

$dictionary = array(
    "_HeroOne_" => $heroes[$rand_heroes[0]], //$student->get_firstname(),
    "_HeroTwo_" => $heroes[$rand_heroes[1]], //$student->get_surname(),
	"_Strength_" => rand(11, 80)
);

$assignment2 = new Coursework;

$assignment2->outputFile($student->get_email(), $student->get_email(), "coursework2", $dictionary, "CSnUsTh4/Assignment2.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the second piece of coursework. -->");

$assignment2->outputFile($student->get_id(), $student->get_email(), "coursework2", $dictionary, "CSnUsTh4/Assignment2.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRP/distribute/" . $assignment2->get_url() . "'>Download</a>";
	
?>