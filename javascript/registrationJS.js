window.onload = function() {
	/* Reset form values for username/password */
	document.getElementById("username").value = "Choose a Username";
	document.getElementById("password").value = "Choose a Password";
	
	/* Centre form heading */
	var formWidth = document.getElementById("form").clientWidth;
	var headingWidth = document.getElementById("formheading").clientWidth;
	document.getElementById("formheading").style.marginLeft = (formWidth - headingWidth) / 2 + "px";
	
	/* Centre form */
	var windowWidth = window.innerWidth;
	var column1Width = document.getElementById("column1").clientWidth;
	var form = document.getElementById("registrationForm");
	var formWidth = form.clientWidth;
	form.style.marginLeft = (windowWidth - column1Width - formWidth) / 2 + "px";
	
}

$(function(){
	$('#formSubmit').on('click', function(e){
        
		e.preventDefault();  
		
		$.ajax({
            type: $('#form').attr('method'),
			url: 'phpscripts/formProcess.php',
			data: $('#form').serialize(),
            success: function(data) { 
				if (validateForm(data)) {
					document.getElementById("form").setAttribute('action', 'registration.php');
					document.getElementById("form").submit();
				};
			},
            error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#password').on('focus', function() {
		if (document.getElementById("password").value == "" || document.getElementById("password").value == "Choose a Password") {
			document.getElementById("password").setAttribute("type", "password");
			document.getElementById("password").value = "";
			document.getElementById("password").style.color = 'black';
		}
	});  
});

$(function(){
	$('#password').on('focusout', function() {
		if (document.getElementById("password").value == "") {
			document.getElementById("password").setAttribute("type", "text");
			document.getElementById("password").value = "Choose a Password";
			document.getElementById("password").style.color = 'grey';
			}
	});  
});
	
/* Client side validation of form */
function validateForm(jsonString) {
		
	/* Retrieve all the values in the json array */
	var dataArray = JSON.parse(jsonString);
	
	if (dataArray['error'] == "noError") {
		return true;
	}
	
	/* Force entry of first name */ 
	else if (dataArray['error'] == "firstNameBlank") { 
		hideAllErrors();
		document.getElementById("firstNameError").style.display = "inline";
		document.getElementById("firstName").select();
		document.getElementById("firstName").focus();
		return false;
    }
	
	/* Force entry of last name */ 
	else if (dataArray['error'] == "lastNameBlank") {   
		hideAllErrors();
		document.getElementById("lastNameError"). style.display = "inline";
		document.getElementById("lastName").select();
		document.getElementById("lastName").focus();
		return false;
    }

	/* Force entry of username */
	else if (dataArray['error'] == "usernameBlank") {
		hideAllErrors();
		document.getElementById("usernameError"). style.display = "inline";
		document.getElementById("username").select();
		document.getElementById("username").focus();
		return false;
    }
	
	/* Force entry of password */
	else if (dataArray['error'] == "passwordBlank") {		
		hideAllErrors();
		document.getElementById("passwordError"). style.display = "inline";
		document.getElementById("password").select();
		document.getElementById("password").focus();
		return false;
    }
	
	/* Validate password */
	else if (dataArray['error'] == "passwordInvalid") {		
			hideAllErrors();
			document.getElementById("passwordError2"). style.display = "inline";
			document.getElementById("password").select();
			document.getElementById("password").focus();
			return false
	}
    
	/* Force entry of email */ 
	else if (dataArray['error'] == "emailBlank") {
		hideAllErrors();
		document.getElementById("emailError"). style.display = "inline";
		document.getElementById("email").select();
		document.getElementById("email").focus();
		return false;
    }
	
	/* Validate email */
	else if (dataArray['error'] == "emailInvalid") {	
			hideAllErrors();
			document.getElementById("emailError2").style.display = "inline";
			document.getElementById("email").select();
			document.getElementById("email").focus();
			return false;
    }
	
	/* Force selection of membership type */ 
	else if (dataArray['error'] == "memTypeBlank") {
		hideAllErrors();
		document.getElementById("membershipTypeError").style.display = "inline";
		document.getElementById("membershipType").focus();
		return false;
    }
	
	/* Force selection of membership duration */ 
	else if (dataArray['error'] == "memLengthBlank") {
		hideAllErrors();
		document.getElementById("membershipDurationError"). style.display = "inline";
		document.getElementById("membershipDuration").focus();
		return false;
    }
	
	else if (dataArray['error'] == "emailExists") {
		hideAllErrors();
		document.getElementById("emailError3"). style.display = "inline";
		document.getElementById("email").select();
		document.getElementById("email").focus();
		return false;
    }
	
	return true;
	
}

/* Hide all error fields when function called at beginnig of next error check */
function hideAllErrors() {  
	document.getElementById("firstNameError").style.display = "none";
	document.getElementById("lastNameError").style.display = "none";
	document.getElementById("usernameError").style.display = "none";
	document.getElementById("passwordError").style.display = "none";
	document.getElementById("passwordError2").style.display = "none";
	document.getElementById("emailError").style.display = "none";
	document.getElementById("emailError2").style.display = "none";  
	document.getElementById("membershipTypeError").style.display = "none"; 
	document.getElementById("membershipDurationError").style.display = "none";	
}

/* If form field for username/password is altered, set to a solid black color */
function setText(id) {
	var element = document.getElementById(id);
	element.style.color = 'black';
}

/* On selection of username/password field, clear existing text */ 
function clearValue(id) {
	var element = document.getElementById(id);
	element.value = "";
}

/* Regular expression validation for email, returns true or false */
function validateEmail(email) {
	var pattern = new RegExp(/^([^\s@]+@[^\s@]+\.[^\s@]+)$/);
	if(pattern.test(email)) {
		return true;
	}
	return false;
}

/* Password validation, returns true or false */
function validatePassword(password) {
	var x, count = 0;
	if (password.length < 8) {
		return false;
	}
	for (x = 0; x < password.length; x++) {
		if (password.charAt(x) >= 0 && password.charAt(x) <= 9) {
			count++; 
		}
	}
	if (count < 2) {
		alert("less than 2");
		return false;
	}
	return true;
}
	
	