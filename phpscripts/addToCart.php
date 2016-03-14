<?php
	include "session.php";
		
	if (!isset($_SESSION['cartTotal'])) {
		$_SESSION['cartTotal'] = 0;
	}
	
	if (!isset($_SESSION['numProducts'])) {
		$_SESSION['numProducts'] = 0;
	}
	
	if (!isset($_SESSION['prod1used'])) {
		$_SESSION['prod1used'] = false;
	}
	if (!isset($_SESSION['prod2used'])) {
		$_SESSION['prod2used'] = false;
	}
	if (!isset($_SESSION['prod3used'])) {
		$_SESSION['prod3used'] = false;
	}
	if (!isset($_SESSION['prod4used'])) {
		$_SESSION['prod4used'] = false;
	}
	if (!isset($_SESSION['prod5used'])) {
		$_SESSION['prod5used'] = false;
	}
	if (!isset($_SESSION['prod6used'])) {
		$_SESSION['prod6used'] = false;
	}
	if (!isset($_SESSION['prod1Qty'])) {
		$_SESSION['prod1Qty'] = 0;
	}
	if (!isset($_SESSION['prod2Qty'])) {
		$_SESSION['prod2Qty'] = 0;
	}
	if (!isset($_SESSION['prod3Qty'])) {
		$_SESSION['prod3Qty'] = 0;
	}
	if (!isset($_SESSION['prod4Qty'])) {
		$_SESSION['prod4Qty'] = 0;
	}
	if (!isset($_SESSION['prod5Qty'])) {
		$_SESSION['prod5Qty'] = 0;
	}
	if (!isset($_SESSION['prod6Qty'])) {
		$_SESSION['prod6Qty'] = 0;
	}
	$productNumber = $_POST['productNum'];
	
	addtoCart($productNumber);
	$_SESSION['totalItems'] = $_SESSION['cartTotal'];
	
	function addToCart($productNumber) {
		switch($productNumber) {
			case 1: 
				$_SESSION['cartTotal']++;
				$_SESSION['prod1Qty']++;
				echo $_SESSION['cartTotal'];
				if ($_SESSION['prod1used'] == false) {
					$_SESSION['numProducts']++;
					$_SESSION['prod1used'] = true;
				}
				break;
			case 2:
				$_SESSION['cartTotal']++;
				$_SESSION['prod2Qty']++;
				echo $_SESSION['cartTotal'];
				if ($_SESSION['prod2used'] == false) {
					$_SESSION['numProducts']++;
					$_SESSION['prod2used'] = true;
				}
				break;
			case 3:
				$_SESSION['cartTotal']++;
				$_SESSION['prod3Qty']++;
				echo $_SESSION['cartTotal'];
				if ($_SESSION['prod3used'] == false) {
					$_SESSION['numProducts']++;
					$_SESSION['prod3used'] = true;
				}
				break;
			case 4:
				$_SESSION['cartTotal']++;
				$_SESSION['prod4Qty']++;
				echo $_SESSION['cartTotal'];
				if ($_SESSION['prod4used'] == false) {
					$_SESSION['numProducts']++;
					$_SESSION['prod4used'] = true;
				}
				break;
			case 5:
				$_SESSION['cartTotal']++;
				$_SESSION['prod5Qty']++;
				echo $_SESSION['cartTotal'];
				if ($_SESSION['prod5used'] == false) {
					$_SESSION['numProducts']++;
					$_SESSION['prod5used'] = true;
				}
				break;
			case 6:
				$_SESSION['cartTotal']++;
				$_SESSION['prod6Qty']++;
				echo $_SESSION['cartTotal'];
				if ($_SESSION['prod6used'] == false) {
					$_SESSION['numProducts']++;
					$_SESSION['prod6used'] = true;
				}
				break;
			default: 
				break;
		}
	}
	
?>