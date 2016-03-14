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
	<script type = "text/javascript" src = "javascript/registrationJS.js"></script>
	<script type = "text/javascript" src = "javascript/headerJS.js"></script>
	
  </head>
  
  
  <body>
		<?php
			include __DIR__ . "/header.php";
		?>
				
		<div id = "bodywrapper">
			
			<?php include __DIR__ . "/navMenu.php";?>
			
			<div class = "column" id = "column2">
			
			<div>
				<div id = "registrationForm">
					<div id = "formInstructions">Welcome to The Hobbit registration page. Here you can register to become a valued shopper, simply by filling in and submitting the Web Form on this page.<br/>First Name, Last Name, Username and Password are compulsory fields, and must be filled out. You do not have to give us your date of birth, or gender, but these will be useful for statistical purposes.<br/>An email address is required, but the Address is optional, again useful for statistics. You must however, select a Membership Type and a Membership Duration, which together will determine your membership cost. Prices are as follows:
						<table>
							<tr>
								<td class = "membershipCell"></td>
								<td class = "membershipCell cellHeading">Annual</td>
								<td class = "membershipCell cellHeading">Five Years</td>
								<td class = "membershipCell cellHeading">Ten Years</td>
								<td class = "membershipCell cellHeading">Lifetime</td>
							</tr>
							<tr>
								<td class = "membershipCell cellHeading">Bronze</td>
								<td class = "membershipCell">$5</td>
								<td class = "membershipCell">$20</td>
								<td class = "membershipCell">$30</td>
								<td class = "membershipCell">$50</td>
							</tr>
							<tr>
								<td class = "membershipCell cellHeading">Gold</td>
								<td class = "membershipCell">$10</td>
								<td class = "membershipCell">$40</td>
								<td class = "membershipCell">$60</td>
								<td class = "membershipCell">$100</td>
							</tr>
							<tr>
								<td class = "membershipCell cellHeading">Platinum</td>
								<td class = "membershipCell">$15</td>
								<td class = "membershipCell">$60</td>
								<td class = "membershipCell">$100</td>
								<td class = "membershipCell">$140</td>
							</tr>
							<tr>
								<td class = "membershipCell cellHeading">Mithril</td>
								<td class = "membershipCell">$50</td>
								<td class = "membershipCell">$200</td>
								<td class = "membershipCell">$300</td>
								<td class = "membershipCell">$500</td>
							</tr>
						</table>
						<div class = "formInstructions">Membership carries the benefit of store discounts, including discounts on DVD purchases for The Hobbit and The Lord of The Rings.</div>
					</div>
					<form id = "form" method = "post" action = "phpscripts/formProcess.php">
						<div class = "pageHeading" id = "formheading">Registration Form</div>
						<fieldset class = "formborder">
							<div class = "holder">
								<label class = "label">First Name:</label>
								<input class = "input" id = "firstName" type = "text" name = "firstName" size = "25" />
							</div>
							<div class= "error" id= "firstNameError">Required: Please enter your first name</div>
							<div class = "holder">
								<label class = "label">Last Name:</label>
								<input class = "input" id = "lastName" type = "text" name = "lastName" size = "25" />
							</div>
							<div class= "error" id= "lastNameError">Required: Please enter your last name</div>
							<div class = "holder">
								<label class = "label">Username:</label>
								<input class = "input" id = "username" type = "text" name = "username" size = "25" value = "Choose a Username" onclick = "clearValue('username')" onchange = "setText('username')" />
							</div>
							<div class= "error" id= "usernameError">Required: Please enter a username</div>
							<div class = "holder">
								<label class = "label">Password:</label>
								<input class = "input" id = "password" type = "text" name = "password" size = "25" value = "Choose a Password" />
							</div>
							<div class= "error" id= "passwordError">Required: Please enter a password</div>
							<div class= "error" id= "passwordError2">Password must be a minimum of 8 characters, and contain 2 numbers</div>
							<div class = "holder">
								<label class = "label">D.O.B.:</label>
								<input class = "input" id = "dob" type = "text" name = "dob" size = "15" />
							</div>
							<div class = "holder">
								<label class = "label">Gender:</label>
								<input class = "input" id = "genderMale" type = "radio" name = "gender" value = "male" />
								<span id = "radioGap">M</span>
								<input class = "input" id = "genderFemale" type = "radio" name = "gender" value = "female" />
								<span>F</span>
							</div>
							<div class = "holder">
								<label class = "label">Email:</label>
								<input class = "input" id = "email" type = "text" name = "email" size = "34" />
							</div>
							<div class= "error" id= "emailError">Required: Please enter your email address</div>
							<div class= "error" id= "emailError2">Please enter a correct email address format</div>
							<div class= "error" id= "emailError3">This email address already exists in our database</div>
							<div class = "holder">
								<label class = "label">	Address:</label>
								<textarea rows = "6" cols = "25" class = "input" id = "address" name = "address"></textarea>
							</div>
							<div class = "holder">
								<label class = "label">Membership Type:</label>
								<select id = "membershipType" class = "input" name = "memType">
									<option value = "none" selected = "selected">None</option>
									<option value = "mithril">Mithril</option>
									<option value = "platinum">Platinum</option>
									<option value = "gold">Gold</option>
									<option value = "bronze">Bronze</option>
								</select>
							</div>
							<div class= "error" id= "membershipTypeError">Required: Please select a membership type</div>
							<div class = "holder">
								<label class = "label">Membership Duration:</label>
								<select id = "membershipDuration" class = "input" name = "memLength">
									<option value = "none" selected = "selected">None</option>
									<option value = "annual">Annual</option>
									<option value = "five">Five Years</option>
									<option value = "ten">Ten Years</option>
									<option value = "lifetime">Lifetime</option>
								</select>
							</div>
							<div class= "error" id= "membershipDurationError">Required: Please select a membership duration</div>
							<div id = "buttonHolder">
								<input type = "reset" value = "Reset" />
								<input id = "formSubmit" type = "submit" value = "Submit" />
							</div>
						</fieldset>
					</form>
				</div>
			</div>
				
			</div>
		</div>
		
		<?php
			include __DIR__ . "/footer.php";
		?>
		   
  </body>
  
</html>