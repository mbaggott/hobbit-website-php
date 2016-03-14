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
		<script type = "text/javascript" src = "javascript/headerJS.js"></script>
		<script type = "text/javascript" src = "javascript/checkoutJS.js"></script>
	</head>
  
  
	<body>
  
		<?php
			include __DIR__ . "/header.php";
		?>
		
		<div id = "bodywrapper">
		
			<?php 
				if(isset($_SESSION['authenticated'])) {
					if ($_SESSION['authenticated'] == false) {
						echo 	"<script>
								this.document.location.href = 'index.php';
								</script>";
					}
				}
				else {
					echo 	"<script>
							this.document.location.href = 'index.php';
						</script>";
				}
				
				include __DIR__ . "/navMenu.php";
			?>
			
			<div class = "column" id = "column2">
				<form id = "checkoutContainer" method = "post" action = "">
					<div class = "pageHeading" id = "checkoutHeading">Checkout</div>
					<fieldset class = "formborder">
						<div class = "holder">
							<label class = "label">First Name:</label>
							<span class = "checkoutField" id = "checkoutFirstName">
								<?php
									include "phpscripts/provideDetails.php";
									echo $firstName;
								?>
							</span>
						</div>
						<div class = "holder">
							<label class = "label">Last Name:</label>
							<span class = "checkoutField" id = "checkoutLastName">
								<?php
									include "phpscripts/provideDetails.php";
									echo $lastName;
								?>
							</span>
						</div>
						<div class = "holder">
							<label class = "label">Email:</label>
							<span class = "checkoutField" id = "checkoutEmail">
								<?php
									include "phpscripts/provideDetails.php";
									echo $email;
								?>
							</span>
						</div>
						<div class = "holder">
							<label class = "label">Credit Card Number:</label>
							<input id = "checkoutCreditCard" class = "input" id = "checkoutCreditCard" type = "text" name = "creditcard" size = "25" />
						</div>
						<div class= "error" id= "checkoutCreditCardError1">Required: Please enter your credit card number</div>
						<div class= "error" id= "checkoutCreditCardError2">Please enter a valid credit card number</div>
						<div class = "holder">
							<label class = "label">Expiry Date:</label>
							<input class = "input" id = "checkoutExpiry" type = "text" name = "expiry" size = "8" />
						</div>
						<div class= "error" id= "checkoutExpiryError1">Required: Please enter the expiry date</div>
						<div class= "error" id= "checkoutExpiryError2">Please enter a valid expiry date</div>
						<div class = "holder">
							<label class = "label">Billing Address:</label>
							<input class = "input" id = "checkoutAddress" type = "text" name = "address" size = "25" />
						</div>
						<div class= "error" id= "checkoutAddressError">Required: Please enter the billing address</div>
						<div class = "holder">
							<label class = "label">City:</label>
							<input class = "input" id = "checkoutCity" type = "text" name = "city" size = "15" />
						</div>
						<div class= "error" id= "checkoutCityError">Required: Please enter your City</div>
						<div class = "holder">
							<label class = "label">State:</label>
							<input class = "input" id = "checkoutState" type = "text" name = "state" size = "10" />
						</div>
						<div class= "error" id= "checkoutStateError">Required: Please enter your State</div>
						<div class = "holder">
							<label class = "label">Country:</label>
							<input class = "input" id = "checkoutCountry" type = "text" name = "country" size = "15" />
						</div>
						<div class= "error" id= "checkoutCountryError">Required: Please enter your Country</div>
						<div id = "valueDiv" class = "holder">
							<label id = "valueLabel" class = "label">Total Order Value:</label>
							<div id = "valueContainer">
							<div class = "valueField" id = "checkoutValue">
								<?php
										include "phpscripts/checkout.php";
								?>
							</div>
							</div>
						</div>
						<input id = "checkoutSubmit" type = "submit" value = "" />
					</fieldset>
					<input id = "date" type = "hidden" value = "<?php echo date('ym')?>"
				</form>
			</div>
				
			</div>
			
			<?php
			include __DIR__ . "/footer.php";
			?>
			
		</div>
  
  
  
	</body>
  
</html>