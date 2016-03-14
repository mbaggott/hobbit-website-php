<?php
	include "session.php";
	
	if(file_exists("phpscripts/products.txt")) {
		$array = file("phpscripts/products.txt");
		$productDetails = array();
		for ($y = 0; $y < count($array); $y++) {
			$lineArray = explode("\t", $array[$y]);
			for ($x = 0; $x < count($lineArray) - 1; $x++) {
				$key = $lineArray[$x];
				$value = $lineArray[$x + 1];
				if ($key == 'price') {
					$productDetails[$y] = $value;
				}
			}	
		}
	}

	$value = getValue($productDetails);
	echo '$' . number_format($value, 2);
	function getValue(array $productDetails) {
		
		$value = 0;
		
		for ($x = 0; $x < count($productDetails); $x++) {
				$product = "prod" . ($x + 1) . "Qty";
				if (isset($_SESSION[$product])) {
					$qty = $_SESSION[$product];
					$price = $productDetails[$x];
					$sub = $qty * $price;
					$value += $sub;
				}
		}
		
		$_SESSION['totalPrice'] = $value;
		return $value;
	
	}
									
?>