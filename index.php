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
	<script type = "text/javascript" src = "javascript/indexJS.js"></script>
	<script type = "text/javascript" src = "javascript/headerJS.js"></script>
	
  </head>
  
  
  <body>
		
		<?php
			include __DIR__ . "/header.php";
		?>
				
		<div id = "bodywrapper">
		
			<?php include __DIR__ . "/navMenu.php";?>
			
			<div class = "column" id = "column2">
				<span class = "spoiler"></span>
				<p id = "synopsis" class = "synopsis">Bilbo, Gandalf, and the company of Dwarves led by Thorin Oakenshield,<br/>
													  resume their journey in the land of Middle Earth. First stop is the<br/>
													  house of Beorn, home to a mysterious shape changer. Gandalf splits from<br/>
													  the company before they enter the dark and dangerous Mirkwood Forest, home<br/>
													  to a particularly nasty breed of Giant Spider. Bilbo and the dwarves will<br/> 
													  need to muster all of their courage to survive this encounter. Aided by the<br/>
													  Wood Elves, the company makes its way towards the human town of Dale, where<br/>
													  they are greeted by Bard, a bowman and descendant of a Lord. Gathering supplies,<br/>
													  the companies' next stop is The Lonely Mountain itself, home to Smaug,<br/>
													  Dragon of myth and legend. Whilst events for the White Council, led by Gandalf<br/>
													  the Grey, are stirring in Dol Guldur, Bilbo and the company of dwarves must face<br/>
													  'The Desolation of Smaug'.<br/><span class = "close" id = "close"></span></p>
				<img id = "frontPageImage" src = "images/photos/gandalf.jpg" alt = "Front Image" />
			</div>
		</div>
		
		<?php
			include __DIR__ . "/footer.php";
		?>
		   
  </body>
  
</html>