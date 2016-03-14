<div class = "column" id = "column1">
	<div class = "button"><a href = "index.php"><img src = "images/homebutton.png" alt = "Home Button" width = "176" height = "48"/></a></div>
	<div class = "button"><a href = "cast.php"><img src = "images/castbutton.png" alt = "Cast &amp; Crew Button" width = "176" height = "48"/></a></div>
	<div class = "button"><a href = "gallery.php"><img src = "images/imagesbutton.png" alt = "Image Gallery" width = "176" height = "48"/></a></div>
	<div class = "button"><a href = "registration.php"><img src = "images/registrationbutton.png" alt = "Registration" width = "176" height = "48"/></a></div>
	<div class = "button" id = "shoppingButton"><a href = "shopping.php"><img src = "images/shoppingbutton.png" alt = "Shopping" width = "176" height = "48"/></a></div>
	<div class = "button" id = "cartButton"><a href = "cart.php"><img src = "images/cartbutton.png" alt = "Shopping Cart" width = "176" height = "48"/></a></div>
	<div class = "button" id = "checkoutButton"><a href = "checkout.php"><img src = "images/checkoutbutton.png" alt = "Shopping Cart" width = "176" height = "48"/></a></div>
	<div class = "button"><a href = "preview.php"><img src = "images/previewbutton.png" alt = "Preview" width = "176" height = "48"/></a></div>
	<div class = "button"><a href = "halloffame.php"><img src = "images/halloffamebutton.png" alt = "Hall of Fame" width = "176" height = "48"/></a></div>
	
</div>
<?php
	if(isset($_SESSION['authenticated'])) {
		if ($_SESSION['authenticated'] == true) {
			echo "<script>
					document.getElementById('shoppingButton').style.display = 'block';
					document.getElementById('cartButton').style.display = 'block';
					document.getElementById('checkoutButton').style.display = 'block';
				</script>";
		}
	}
?>

