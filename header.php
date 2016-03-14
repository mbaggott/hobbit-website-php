<div id = "headerDiv">
	<div id = "logincontainer">
		<?php
			if(isset($_SESSION['authenticated'])) {
				if($_SESSION['authenticated'] == true) {
					include __DIR__ . "/loggedin.php";
				}
				else {
					include __DIR__ . "/login.php";
				}
			}
			else {
				include __DIR__ . "/login.php";
			}
			if(isset($_SESSION['firstlogin'])) {
				unset($_SESSION['firstlogin']);
				echo "<script>
					this.document.location.href = 'shopping.php';
				</script>";
			}
		?>
	</div>
	<img id = "logo" src = "images/logo.png" width = "350" height = "175" alt = "Hobbit Logo"/>
	<noscript><p>WARNING!! This page uses Javascript for formatting. Please turn it on for your browser.</p></noscript>			
</div>