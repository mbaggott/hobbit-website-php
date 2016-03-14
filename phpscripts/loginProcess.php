<?php
	include "session.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$postArray = $_POST;
		
		$username = $postArray["username"];
		$password = $postArray["password"];
	
		if ($username != null && $password != null) {
			
			$error = "noError";
			if(file_exists("users.txt")) {
				$array = file("users.txt");
				$customerDetails = array();
				for ($y = 0; $y < count($array); $y++) {
					$lineArray = explode("\t", $array[$y]);
					for ($x = 0; $x < count($lineArray); $x = $x + 2) {
						$key = $lineArray[$x];
						$value = $lineArray[$x + 1];
						$customerDetails[$y][$key] = $value; 
					}
				}
			}
			
			//Establish a matching customer record for the supplied username
			for($z = 0; $z < count($customerDetails); $z++) {
				if ($customerDetails[$z]['email'] == $username) {
						$match = $z;
				}
			}
			
			//Check username matches email address
			if (isset($match)) {
				if (md5($password) == $customerDetails[$match]['password']) {
					$postArray['authenticated'] = true;
					$_SESSION['authenticated'] = true;
					$_SESSION['firstlogin'] = true;
					$_SESSION['username'] = $username;
				}
				else {
					$postArray['authenticated'] = false;
				}
			}
			else {
				$postArray['authenticated'] = false;
			}
				
		}

		else if ($username == null) {
			$error = "usernameBlank";
		}
		
		else {
			$error = "passwordBlank";
		}
		
		$postArray['error'] = $error;
		
		echo json_encode($postArray);
		
	}


?>