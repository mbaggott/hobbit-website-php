//Seperate header javascript file due to Scriptaculous clashing with jQuery in the form of the $ tag

jQuery(function(){
	jQuery('#loginSubmit').on('click', function(e){
        e.preventDefault();  
		
		jQuery.ajax({
            type: jQuery('#loginForm').attr('method'),
			url: 'phpscripts/loginProcess.php',
			data: jQuery('#loginForm').serialize(),
            success: function(data) { 
				if (validateLogin(data)) {
					document.getElementById("loginForm").submit(); 
				};
			},
            error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

jQuery(function(){
	jQuery('#logoutSubmit').on('click', function(e){
        e.preventDefault();  
		
		jQuery.ajax({
            type: jQuery('#loginForm').attr('method'),
			url: 'phpscripts/logoutProcess.php',
			data: jQuery('#loginForm').serialize(),
            success: function(data) { 
				document.getElementById("loginForm").submit();
			},
            error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

function validateLogin(jsonString) {
		
	/* Retrieve all the values in the json array */
	var dataArray = JSON.parse(jsonString);
	
	if (dataArray['error'] == "noError" && dataArray['authenticated'] == true) {
		return true;
	}
	
	
	if (dataArray['error'] == "usernameBlank") { 
		document.getElementById("usernameLogin").select();
		document.getElementById("usernameLogin").focus();
		return false;
    }
	
	else if (dataArray['error'] == "passwordBlank") { 
		document.getElementById("passwordLogin").select();
		document.getElementById("passwordLogin").focus();
		return false;
    }
	
	else if (dataArray['authenticated'] == false) { 
		document.getElementById("usernameLogin").select();
		document.getElementById("usernameLogin").focus();
		return false;
    }
	
	return false;
}