<?php
	include "session.php";
	
	if (isset($_SESSION['cartTotal'])) {
		$_SESSION['cartTotal'] = 0;
	}
	
	if (isset($_SESSION['numProducts'])) {
		$_SESSION['numProducts'] = 0;
	}
	
	if (isset($_SESSION['prod1used'])) {
		$_SESSION['prod1used'] = false;
	}
	if (isset($_SESSION['prod2used'])) {
		$_SESSION['prod2used'] = false;
	}
	if (isset($_SESSION['prod3used'])) {
		$_SESSION['prod3used'] = false;
	}
	if (isset($_SESSION['prod4used'])) {
		$_SESSION['prod4used'] = false;
	}
	if (isset($_SESSION['prod5used'])) {
		$_SESSION['prod5used'] = false;
	}
	if (isset($_SESSION['prod6used'])) {
		$_SESSION['prod6used'] = false;
	}
	if (isset($_SESSION['prod1Qty'])) {
		$_SESSION['prod1Qty'] = 0;
	}
	if (isset($_SESSION['prod2Qty'])) {
		$_SESSION['prod2Qty'] = 0;
	}
	if (isset($_SESSION['prod3Qty'])) {
		$_SESSION['prod3Qty'] = 0;
	}
	if (isset($_SESSION['prod4Qty'])) {
		$_SESSION['prod4Qty'] = 0;
	}
	if (isset($_SESSION['prod5Qty'])) {
		$_SESSION['prod5Qty'] = 0;
	}
	if (isset($_SESSION['prod6Qty'])) {
		$_SESSION['prod6Qty'] = 0;
	}
	
?>