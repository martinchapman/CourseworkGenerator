<?php

include("CourseworkTemplate.php");

$evidence = array(
   'DNA',
   'footprint',
   'fingerprint',
   'clothing fibre',
   'tire marks',
   'vegetative matter',
   'broken glass',
   'bullet casing',
   'powder residue',
   'paint sample',
   'personal ephemera',
   'handwritten document',
   'CCTV Footage',
   'Witness Statement' 
);

$rand_evidence = array_rand($evidence);

$object_evidence = array(
   'DNA' => 'dna',
   'footprint' => 'footprint',
   'fingerprint' => 'fingerprint',
   'clothing fibre' => 'clothingFibre',
   'tire marks' => 'tireMarks',
   'vegetative matter' => 'vegetativeMatter',
   'broken glass' => 'brokenGlass',
   'bullet casing' => 'bulletCasing',
   'powder residue' => 'powderResidue',
   'paint sample' => 'paintSample',
   'personal ephemera' => 'personalEphemera',
   'handwritten document' => 'handwrittenDocument',
   'CCTV Footage' => 'cctvFootage',
   'Witness Statement' => 'witnessStatement'
);

$evidence_list_A;
$evidence_list_B;
$evidence_list_C;

if ( $evidence[$rand_evidence] == "DNA" ) {
	
	$evidence_list_A = "2x DNA";
	$evidence_list_B = "";
	$evidence_list_C = "[DNA, DNA]";

} else {

	$evidence_list_A = "1x " . $evidence[$rand_evidence];
	$evidence_list_B = "1x DNA";
	$evidence_list_C = "[DNA]";
}

$dictionary = array(
    '_EvidenceType_' => $evidence[$rand_evidence],
    '_EvidenceObject_' => $object_evidence[$evidence[$rand_evidence]],
    '_EvidenceListA_' => $evidence_list_A,
    '_EvidenceListB_' => $evidence_list_B,
    '_EvidenceListC_' => $evidence_list_C
);

$assignment1 = new Coursework;

$assignment1->outputFile($student->get_email(), $student->get_email(), "coursework1", $dictionary, "CSnUsTh4/Assignment1.tex", "BEHeNSx3", "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");

$assignment1->outputFile($student->get_id(), $student->get_email(), "coursework1", $dictionary, "CSnUsTh4/Assignment1.tex", "coursework", "");

echo "<a href='http://px205.dcs.kcl.ac.uk:8080/PRA/distribute/" . $assignment1->get_url() . "'>Download</a>";
	
?>
