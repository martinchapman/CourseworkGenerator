<?php

class Coursework {
	
	private $url;
	
	public function get_url() {
		
		return $this->url;
		
	}
	
	private $file;
	
	public function get_file() {
		
		return $this->file;
		
	}
	
	private function courseworkEntry($id, $target_folder, $coursework_id, $properties) {
		
		if (!file_exists($target_folder . $coursework_id)) {
   
		    mkdir($target_folder . $coursework_id, 0700, true);
			
			$index = fopen($target_folder . "/index.php", "w") or die("Error (Code: 1), please report to martin.chapman@kcl.ac.uk");
			
			fclose($index);
			
			$index = fopen($target_folder . $coursework_id . "/index.php", "w") or die("Error (Code: 2), please report to martin.chapman@kcl.ac.uk.");
			
			fclose($index);
			
		}
		
		$overviewfile = fopen($target_folder . $coursework_id . "/overview.csv", "a") or die("Error (Code: 3), please report to martin.chapman@kcl.ac.uk");
	
		$writestring = "";
	
		$writestring = $writestring . $id . ",";

		while ($value = current($properties)) {

		    $writestring = $writestring . ( key($properties) . "," . $value . "," );
	    
		    next($properties);
		
		}
	
		$writestring = substr($writestring, 0, -1);
	
		$writestring = $writestring . "\n";
	
		fwrite($overviewfile, $writestring);
		
		fclose($overviewfile);
		
	}
	
	private function courseworkOverview($id, $coursework_id, $properties) {
		
		$utils = new Utilities;
	
		$target_folder = "xVhpDvmL/";
		
		if (!file_exists($target_folder)) {
			
			mkdir($target_folder, 0700, true);
	
			$index = fopen($target_folder . "/index.php", "w") or die("Error (Code: 4), please report to martin.chapman@kcl.ac.uk");
			
			fwrite($index, "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");
			
			fclose($index);
		
		}
		
		if (!file_exists($target_folder . $coursework_id)) {
   
		    mkdir($target_folder . $coursework_id, 0700, true);
			
			$index = fopen($target_folder . "/index.php", "w") or die("Error (Code: 5), please report to martin.chapman@kcl.ac.uk.");
			
			fwrite($index, "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");
			
			fclose($index);
			
			$index = fopen($target_folder . $coursework_id . "/index.php", "w") or die("Error (Code: 6), please report to martin.chapman@kcl.ac.uk.");
			
			fwrite($index, "<!-- Email me, martin.chapman@kcl.ac.uk, explaning exactly how you got here, quoting the following characters -- r9YeP9Wd -- and do so BEFORE the second piece of coursework is released, and I'll give you full marks on the first piece of coursework. -->");
			
			fclose($index);
			
		}
		
		$overviewfile = fopen($target_folder . $coursework_id . "/overview.csv", "a") or die("Error (Code: 7), please report to martin.chapman@kcl.ac.uk.");
		
		if (flock($overviewfile, LOCK_EX)) { // do an exclusive lock
			
			$writestring = "";
	
			$writestring = $writestring . $id . ",";
	
			while ($value = current($properties)) {
	   
				$writestring = $writestring . ( key($properties) . "," . $value . "," );
	    
			    next($properties);
		
			}
	
			$writestring = substr($writestring, 0, -1);
	
			$writestring = $writestring . "\n";
	
			fwrite($overviewfile, $writestring);
		
		    flock($overviewfile, LOCK_UN); // release the lock
			
		} else {
		 
			$logfile = fopen($target_folder . $coursework_id .  "/" . $id . "_log.txt", "w+") or die("Error (Code: 8), please report to martin.chapman@kcl.ac.uk.");
			
			if (flock($logfile, LOCK_EX)) {
			
				fwrite($overviewfile, "Couldn't lock file: " . $target_folder . " " . $coursework_id . " " . $id);
				
				flock($logfile, LOCK_UN);
				
			} else { 
			
				//echo "Couldn't lock the file.";
			
			}
			
			fclose($logfile);
			
		}

		fclose($overviewfile);
		
	}
	
	public function outputFile($id, $file_id, $coursework_id, $dictionary, $file, $output_folder, $message) {
		
		$target_folder = $output_folder . "/" . $id . "/";
		
		if (!file_exists($output_folder)) {
   
		    mkdir($output_folder, 0700, true);
			
			$index = fopen($output_folder . "/index.php", "w") or die("Error (Code: 9), please report to martin.chapman@kcl.ac.uk.");
			
			fwrite($index, $message);
			
			fclose($index);
			
		}
		
		if (!file_exists($target_folder)) {
   
		    mkdir($target_folder, 0700, true);
			
			$index = fopen($target_folder . "/index.php", "w") or die("Error (Code: 10), please report to martin.chapman@kcl.ac.uk.");
			
			fwrite($index, $message);
			
			fclose($index);
			
		}
		
		
	
		$utils = new Utilities;
		
		if (!file_exists($target_folder . $coursework_id)) {
   
		    mkdir($target_folder . $coursework_id, 0700, true);
			
			$index = fopen($target_folder . $coursework_id . "/index.php", "w") or die("Error (Code: 11), please report to martin.chapman@kcl.ac.uk.");
			
			fwrite($index, $message);
			
			fclose($index);
			
			$texfile = fopen($target_folder . $coursework_id . "/" . $file_id . ".tex", "w") or die("Error (Code: 12), please report to martin.chapman@kcl.ac.uk.");

			$handle = fopen($file, "r");

			if ($handle) {
	
				$patterns = array();
				$replacements = array();
			
				$properties = array();
	
			    while (($line = fgets($handle)) !== false) {
		
					$pattern = '/\_\w+\_/';
		
					if ( preg_match_all($pattern, $line, $matches, PREG_OFFSET_CAPTURE, 0) ) {	
						
						foreach ($matches as &$outer) {
				
							foreach ($outer as &$inner) {

								array_push($patterns, $inner[0]);
					
								array_push($replacements, $dictionary[$inner[0]]);
					
								$properties[str_replace("_", "", $inner[0])] = $dictionary[$inner[0]];
									
							}
				
						}
			
						$line = preg_replace($patterns, $replacements, $line);
						
						// Can be more efficient
						$line = str_replace("_", "", $line);
						
						fwrite($texfile, $line);
			
					} else {
					
						fwrite($texfile, $line);
					
					}
		
			    }
	
			    fclose($handle);
			
				fclose($texfile);
			
			} else {
	
	
	
			} 
			
			$logfile = fopen($target_folder . $coursework_id .  "/" . $file_id . "_log.txt", "a") or die("Error (Code: 13), please report to martin.chapman@kcl.ac.uk.");
			
			$utils->outputLatex($target_folder . $coursework_id, $target_folder . $coursework_id . "/" . $file_id, $logfile);

			$this->courseworkOverview($id, $coursework_id, $properties);
			
			$this->courseworkEntry($id, $target_folder, $coursework_id, $properties);
			
			fclose($logfile);
		
		} else {
			
			if ( file_exists($target_folder . $coursework_id . "/" . $file_id . ".tex") && !file_exists($target_folder . $coursework_id . "/" . $file_id . ".pdf")) {
			
				$logfile = fopen($target_folder . $coursework_id .  "/" . $file_id . "_log.txt", "a") or die("Error (Code: 14), please report to martin.chapman@kcl.ac.uk.");
				
				$utils->outputLatex($target_folder . $coursework_id, $target_folder . $coursework_id . "/" . $file_id, $logfile);
				
			}

		}
		
		$this->url = $target_folder . $coursework_id . "/" . $file_id . ".pdf";
		
		$this->file = $id . ".pdf";;
		
	}

}

?>
