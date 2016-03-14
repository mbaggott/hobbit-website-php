<?php
	include "session.php";
	
	$product = 'prod' . $_POST['productNum'] . 'Qty';
	$used = 'prod' . $_POST['productNum'] . 'used';
	$price = array();
	
	if(file_exists("products.txt")) {
		$array = file("products.txt");
		$productDetails = array();
		$productDetails[0] = array();
		$productDetails[1] = array();
		for ($y = 0; $y < count($array); $y++) {
			$lineArray = explode("\t", $array[$y]);
			for ($x = 0; $x < count($lineArray); $x = $x + 2) {
				$key = $lineArray[$x];
				$value = $lineArray[$x + 1];
				if ($key == 'price') {
					$price[$y] = $value;
				}
			}	
		}
	}
	
	switch($_POST['operation']) {
		case "add":
			$_SESSION[$product]++;
			$_SESSION['cartTotal']++;
			$array = array($product => $_SESSION[$product], 'cartTotal' => $_SESSION['cartTotal'], 'price' => $price[$_POST['productNum'] - 1]);
			$array = json_encode($array);
			echo $array;
			break;
		case "minus":
			if ($_SESSION[$product] > 0) {
				$_SESSION[$product]--;
				$_SESSION['cartTotal']--;
			}
			if ($_SESSION[$product] == 0) {
				$_SESSION['numProducts']--;
				$_SESSION[$used] = false;
			}
			$array = array($product => $_SESSION[$product], 'cartTotal' => $_SESSION['cartTotal'], 'price' => $price[$_POST['productNum'] - 1]);
			$array = json_encode($array);
			echo $array;
			break;
		default:
			break;
	}
	

?>