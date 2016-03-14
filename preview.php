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
		<script type = "text/javascript" src = "javascript/previewJS.js"></script>
		<script type = "text/javascript" src = "javascript/headerJS.js"></script>
	</head>
  
	<body>
  
		<?php
			include __DIR__ . "/header.php";
		?>
		
		<div id = "bodywrapper">
		
			<?php include __DIR__ . "/navMenu.php";?>
			
			<div class = "column" id = "column2">
				<div id = "preview">
					<iframe style="border:0;" width="640" height="360" src="http://www.youtube.com/embed/OPVWy1tFXuc?feature=player_detailpage" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		
		<?php
			include __DIR__ . "/footer.php";
		?>
		   
  </body>
  
</html>