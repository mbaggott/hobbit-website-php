<?php
	include "session.php";
	
	if (isset($_POST['prodQty'])) {
		$productQty = $_POST['prodQty'];
	}
	else $productQty = null;	
	
	if(file_exists("products.txt")) {
		$array = file("products.txt");
		$productDetails = array();
		for ($y = 0; $y < count($array); $y++) {
			$lineArray = explode("\t", $array[$y]);
			for ($x = 0; $x < count($lineArray); $x = $x + 2) {
				$value = $lineArray[$x + 1];
				$key = $lineArray[$x];
				$productDetails[$y][$key] = $value;
			}
		}
	}
	
	if ($productQty == "td4-0") { 
		if (isset($_SESSION['prod1Qty'])) {
			if ($_SESSION['prod1Qty'] > 0) {
				$products = array("prodNum" => "0", "code" => $productDetails[0]['code'], "description" => $productDetails[0]['description'], "filename" => $productDetails[0]['filename'], "price" => $productDetails[0]['price'], "qty" => $_SESSION['prod1Qty']);
				$products = json_encode($products, JSON_FORCE_OBJECT);
				echo $products;
			}
		}
	}
	if ($productQty == "td4-1") {		
		if (isset($_SESSION['prod2Qty'])) {
			if ($_SESSION['prod2Qty'] > 0) {
				$products = array("prodNum" => "1", "code" => $productDetails[1]['code'], "description" => $productDetails[1]['description'], "filename" => $productDetails[1]['filename'], "price" => $productDetails[1]['price'], "qty" => $_SESSION['prod2Qty']);
				$products = json_encode($products, JSON_FORCE_OBJECT);
				echo $products;
			}
		}
	}
	
	if ($productQty == "td4-2") {		
		if (isset($_SESSION['prod3Qty'])) {
			if ($_SESSION['prod3Qty'] > 0) {
				$products = array("prodNum" => "2", "code" => $productDetails[2]['code'], "description" => $productDetails[2]['description'], "filename" => $productDetails[2]['filename'], "price" => $productDetails[2]['price'], "qty" => $_SESSION['prod3Qty']);
				$products = json_encode($products, JSON_FORCE_OBJECT);
				echo $products;
			}
		}
	}
	
	if ($productQty == "td4-3") {		
		if (isset($_SESSION['prod4Qty'])) {
			if ($_SESSION['prod4Qty'] > 0) {
				$products = array("prodNum" => "3", "code" => $productDetails[3]['code'], "description" => $productDetails[3]['description'], "filename" => $productDetails[3]['filename'], "price" => $productDetails[3]['price'], "qty" => $_SESSION['prod4Qty']);
				$products = json_encode($products, JSON_FORCE_OBJECT);
				echo $products;
			}
		}
	}
	
	if ($productQty == "td4-4") {		
		if (isset($_SESSION['prod5Qty'])) {
			if ($_SESSION['prod5Qty'] > 0) {
				$products = array("prodNum" => "4", "code" => $productDetails[4]['code'], "description" => $productDetails[4]['description'], "filename" => $productDetails[4]['filename'], "price" => $productDetails[4]['price'], "qty" => $_SESSION['prod5Qty']);
				$products = json_encode($products, JSON_FORCE_OBJECT);
				echo $products;
			}
		}
	}
	
	if ($productQty == "td4-5") {		
		if (isset($_SESSION['prod6Qty'])) {
			if ($_SESSION['prod6Qty'] > 0) {
				$products = array("prodNum" => "5", "code" => $productDetails[5]['code'], "description" => $productDetails[5]['description'], "filename" => $productDetails[5]['filename'], "price" => $productDetails[5]['price'], "qty" => $_SESSION['prod6Qty']);
				$products = json_encode($products, JSON_FORCE_OBJECT);
				echo $products;
			}
		}
	}

?>