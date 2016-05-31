<?php

//foreach ($_POST as $key => $value){

  //echo "{$key} = {$value}\r\n";

//}

class Utilities {
	
	function deleteAll() {
		
		$this->deleteDir("BEHeNSx3", true);
		
		$this->deleteDir("coursework", true);

		$this->deleteDir("xVhpDvmL", true);
		
		die();
		
	}
	
	function outputLatex($target_folder, $target, $logfile) {
		
		$exec_string = '/usr/texbin/latex -output-directory=' . $target_folder . " " . $target . ".tex";

		fwrite($logfile, "Exec: " . $exec_string . "\n");

		fwrite($logfile, exec($exec_string) . "\n");
		
		fwrite($logfile, exec($exec_string) . "\n");

	}
	
	function deleteDir($dir, $DeleteMe) {
	    
		if(!$dh = @opendir($dir)) return;
	    
		while (false !== ($obj = readdir($dh))) {
	    
		    if($obj=='.' || $obj=='..') continue;
	    
		    if (!@unlink($dir.'/'.$obj)) $this->deleteDir($dir.'/'.$obj, true);
	    
		}

	    closedir($dh);
	    
		if ($DeleteMe){
	    
		    @rmdir($dir);
	    
		}
		
	}

	function latexSpecialChars( $string ) {
		
	    $map = array( 
	                "#"=>"\\#",
			            "$"=>"\\$",
				                "%"=>"\\%",
						            "&"=>"\\&",
							                "~"=>"\\~{}",
									            "_"=>"\\_",
										                "^"=>"\\^{}",
												            "\\"=>"\\textbackslash",
													                "{"=>"\\{",
															            "}"=>"\\}",
																        );
																	    return preg_replace( "/([\^\%~\\\\#\$%&_\{\}])/e", "\$map['$1']", $string );
																	    }
																		
	}

?>
