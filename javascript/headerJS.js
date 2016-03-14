$(function(){
	$('#loginSubmit').on('click', function(e){
        e.preventDefault();  
		
		$.ajax({
            type: $('#loginForm').attr('method'),
			url: 'phpscripts/loginProcess.php',
			data: $('#loginForm').serialize(),
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

$(function(){
	$('#logoutSubmit').on('click', function(e){
        e.preventDefault();  
		
		$.ajax({
            type: $('#loginForm').attr('method'),
			url: 'phpscripts/logoutProcess.php',
			data: $('#loginForm').serialize(),
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

