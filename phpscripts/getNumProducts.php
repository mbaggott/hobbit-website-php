<?php
	include "session.php";
	
	$numProducts = $_SESSION['numProducts'];
	$cartTotal = $_SESSION['cartTotal'];
	$array = array('numProducts' => $numProducts, 'cartTotal' => $cartTotal);
	$array = json_encode($array);
	echo $array;

?>