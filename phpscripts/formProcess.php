<?php
	include "session.php";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$postArray = $_POST;
	
		$firstName = test_input($postArray["firstName"]);
		$lastName = test_input($postArray["lastName"]);
		$username = $postArray["username"];
		$password = $postArray["password"];
		$dob = test_input($postArray["dob"]);
		if (isset($_POST['gender'])) {
			$gender = test_input($postArray["gender"]);
		}
		else $gender = null;
		$email = test_input($postArray["email"]);
		$address = test_input($postArray["address"]);
		$memType = test_input($postArray["memType"]);
		$memLength = test_input($postArray["memLength"]);
		
		if (!(validateCompulsory($firstName))) {
			$error = "firstNameBlank";
		}
		else if (!(validateCompulsory($lastName))) {
			$error = "lastNameBlank";
		}
		
		else if (!(validateCompulsory($username))) {
			$error = "usernameBlank";
		}
		
		else if (!(validateCompulsory($password))) {
			$error = "passwordBlank";
		}
		
		else if (!(validatePassword($password))) {
			$error = "passwordInvalid"; 
		}
		
		else if (!(validateCompulsory($email))) {
			$error = "emailBlank";
		}
		
		else if (!(validateEmail($email))) {
			$error = "emailInvalid";
		}
		
		else if (!(validateCompulsory($memType))) {
			$error = "memTypeBlank";
		}
		
		else if (!(validateCompulsory($memLength))) {
			$error = "memLengthBlank";
		}
		
		else {
			$error = "noError";
		}
		
		if ($error == "noError") {
			if(file_exists("users.txt")) {
				$array = file("users.txt");
				$customerDetails = array();
				$customerDetails[0] = array();
				$customerDetails[1] = array();
				for ($y = 0; $y < count($array); $y++) {
					$lineArray = explode("\t", $array[$y]);
					for ($x = 0; $x < count($lineArray); $x = $x + 2) {
						$key = $lineArray[$x];
						$value = $lineArray[$x + 1];
						if ($key == 'email') {
							if ($value == $email) {
								$error = "emailExists";
							}
						}
					}
				}
			}
		}
		
		$postArray["firstName"] = $firstName;
		$postArray["lastName"] = $lastName;
		$postArray["username"] = $username;
		$postArray["password"] = md5($password);
		$postArray["dob"] = $dob;
		$postArray["gender"] = $gender;
		$postArray["email"] = $email;
		$postArray["address"] = $address;
		$postArray["memType"] = $memType;
		$postArray["memLength"] = $memLength;
		$postArray["error"] = $error;
		
		echo json_encode($postArray);
		
		if ($error == "noError") {
			
			$fp = fopen("users.txt", "a") or die ("Cannot open file: "."users.txt");
			
			$outputstring = "firstName" . "\t" . $postArray["firstName"]. "\t";
			$outputstring .= "lastName" .  "\t" . $postArray["lastName"]. "\t";
			$outputstring .= "username" .  "\t" . $postArray["username"]. "\t";
			$outputstring .= "password" .  "\t" . $postArray["password"]. "\t";
			$outputstring .= "dob" .  "\t" . $postArray["dob"]. "\t";
			$outputstring .= "gender" .  "\t" . $postArray["gender"]. "\t";
			$outputstring .= "email" .  "\t" . $postArray["email"]. "\t";
			$outputstring .= "address" .  "\t" . $postArray["address"]. "\t";
			$outputstring .= "memType" .  "\t" . $postArray["memType"]. "\t";
			$outputstring .= "memLength" .  "\t" . $postArray["memLength"]. "\n";
			
			fwrite($fp, $outputstring);
			fclose($fp);
		}
		
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}
	
	function validateCompulsory($data) {
	
		if ($data == null || $data == "" || $data == "Choose a Username" || $data == "Choose a Password" || $data == "none") {
			return false;
		}
		
		return true;
	
	}
	
	function validatePassword($data) {
		$count = 0;
		$len = strlen($data);
		for ($x = 0; $x < $len; $x++) {
			if(is_numeric($data[$x])) {
				$count++;
			}
		}
		if ($len >= 8 && $count >= 2) {
			return true;
		}
		return false;
	}
	
	function validateEmail($data) {
		$regex = "/^([^\s@]+@[^\s@]+\.[^\s@]+)$/";
		if (preg_match($regex, $data)) {
			return true;
		}
		return false;
	
	}
	
	

?>