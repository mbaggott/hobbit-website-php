<div>
<form id = "loginForm" method ="post" action = "index.php" class ="loginform">
	<fieldset id = "loginborder" class = "loginborder">
		<div>
			<div class = "loggedindiv"><?php echo $_SESSION['username'];?></div>
			<input type = "button" id = "logoutSubmit" class = "loginbutton" value = "logout"></input>
		</div>
	</fieldset>
</form>
</div>
<div id = "shoppingCart2" class = "shoppingCart2" onclick = "javascript:location.href='cart.php'">
	<div class = "container"><div class = "outer"><div class = "cartImage"><img id = "cartSmall" src = "images/cartSmall.jpg" alt = "Shopping Cart" width = "65" height = "45" /></div></div></div><div id = "cartAmount" class = "cartAmount">
		<?php 	 
			if (isset($_SESSION['cartTotal'])) {
				echo $_SESSION['cartTotal'];
			}
		?>
	</div>
</div>

