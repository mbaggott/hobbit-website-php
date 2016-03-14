<form id = "loginForm" method ="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" class ="loginform">
	<fieldset class = "loginborder">
		<label class = "loginlabel">username</label>
		<input id = "usernameLogin" class = "logininput" type = "text" size = "10" name = "username"></input>
		<label class = "loginlabel">password</label>
		<input id = "passwordLogin" class = "logininput" type = "password" size = "10" name = "password"></input>
		<input type = "button" id = "loginSubmit" class = "loginbutton" value = "login"></input>
	</fieldset>
</form>
