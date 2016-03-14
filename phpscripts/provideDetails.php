<?php
	include "session.php";
	
	if(file_exists("phpscripts/users.txt")) {
		$array = file("phpscripts/users.txt");
		$customerDetails = array();
		$customerDetails[0] = array();
		$customerDetails[1] = array();
		for ($y = 0; $y < count($array); $y++) {
			$lineArray = explode("\t", $array[$y]);
			for ($x = 0; $x < count($lineArray); $x = $x + 2) {
				$key = $lineArray[$x];
				$value = $lineArray[$x + 1];
				$customerDetails[$y][$key] = $value;
				if ($value == $_SESSION['username']) {
					$match = $y;
				}
			}
		
		}
	}
	
	$firstName = $customerDetails[$match]['firstName'];
	$lastName = $customerDetails[$match]['lastName'];
	$email = $customerDetails[$match]['email'];

	
?>