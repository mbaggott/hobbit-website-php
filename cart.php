<?php
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>The Hobbit Website</title>
	  <meta http-equiv= "Content-Type" content = "text/html;charset=iso-8859-1" />
	<link type = "text/css" rel = "stylesheet" href = "stylesheet.css"></link>
	<script type = "text/javascript" src = "javascript/jquery-2.0.3.min.js"></script>
	<script type = "text/javascript" src = "javascript/cartJS.js"></script>
	<script type = "text/javascript" src = "javascript/headerJS.js"></script>
	
  </head>
  
  
  <body>
		
		<?php
			if(isset($_SESSION['authenticated'])) {
				if ($_SESSION['authenticated'] == false) {
					echo "<script>
							this.document.location.href = 'index.php';
						</script>";
				}
			}
			else {
				echo "<script>
						this.document.location.href = 'index.php';
					</script>";
			}
			
			include __DIR__ . "/header.php";
		?>
				
		<div id = "bodywrapper">
		
			<?php include __DIR__ . "/navMenu.php";?>
			
			<div class = "column" id = "column2">
				<div>
					<div class = "pageHeading" id = "cartHeading">Shopping Cart</div>
					<table id = "cartTable" class = "cartTable">
							<tr>
								<td></td>
								<td class = "tableHeading">Product Code</td>
								<td class = "tableHeading">Description</td>
								<td class = "tableHeading">Image</td>
								<td class = "tableHeading">QTY</td>
								<td class = "tableHeading">Price</td>
								<td class = "tableHeading">Subtotal</td>
							</tr>
							<?php
								if (isset($_SESSION['numProducts'])) {
									$numProd = $_SESSION['numProducts'];
									for ($x = 0; $x < $numProd; $x++) {
										echo "	<tr>
													<td>
														<div class = 'plusminus' id = 'plus" . $x . "'><img src = 'images/plusbutton.jpg' alt = 'Plus Button' width = '20' height = '20' /></div>
														<div class = 'plusminus' id = 'minus" . $x . "'><img src = 'images/minusbutton.jpg' alt = 'Minus Button' width = '20' height = '20' /></div>
													</td>
													<td id = 'td1-" . $x . "'></td>
													<td id = 'td2-" . $x . "'></td>
													<td id = 'td3-" . $x . "'><img id = 'img" . $x . "' src = 'images/shopping/hobbit_mugs.jpg' alt = '' /></td>
													<td id = 'td4-" . $x . "'></td>
													<td id = 'td5-" . $x . "'></td>
													<td id = 'td6-" . $x . "'></td>
												</tr>
												";
									}
									echo "	
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>Total:</td>
												<td id = 'td7'></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td colspan = '2'><div class = 'checkoutImage' id = 'checkoutImage'><img src = 'images/checkout.png' alt = 'Checkout' width = '150' height = '29'/></div></td>
											</tr>
											";
								}
							?>
					</table>
				</div>
				
			</div>
		</div>
		
		<?php
			include __DIR__ . "/footer.php";
		?>
		   
  </body>
  
</html>