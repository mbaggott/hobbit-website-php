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
	<script type = "text/javascript" src = "javascript/galleryJS.js"></script>
	<script type = "text/javascript" src = "javascript/headerJS.js"></script>
	
  </head>
  
  
  <body>
		<?php
			include __DIR__ . "/header.php";
		?>
				
		<div id = "bodywrapper">
			
			<?php include __DIR__ . "/navMenu.php";?>
			
			<div class = "column" id = "column2">
				
				
				<div class = "pageHeading" id = "galleryHeading">Image Gallery</div>
				<div id = "galleryContainer">
					<div class = "rowHolder">
						<span class = "pic" onclick = "openPicture('pic1')"><img src = "images/photos/bilbo_small.jpg" alt = "Bilbo Thumbnail" /></span>
						<span class = "pic" onclick = "openPicture('pic2')"><img src = "images/photos/gandalf_small.jpg" alt = "Gandalf Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic3')"><img src = "images/photos/legolas_small.jpg" alt = "Legolas Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic4')"><img src = "images/photos/butterflies_small.jpg" alt = "Butterflies Thumbnail"/></span>
					</div>
					<div class = "rowHolder">
						<span class = "pic" onclick = "openPicture('pic5')"><img src = "images/photos/human_small.jpg" alt = "Human Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic6')"><img src = "images/photos/elf_small.jpg" alt = "Elf Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic7')"><img src = "images/photos/bilbo2_small.jpg" alt = "Bilbo 2 Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic8')"><img src = "images/photos/elfbow_small.jpg" alt = "Elf Bow Thumbnail"/></span>
					</div>
					<div class = "rowHolder">
						<span class = "pic" onclick = "openPicture('pic9')"><img src = "images/photos/barrels_small.jpg" alt = "Barrels Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic10')"><img src = "images/photos/legolas2_small.jpg" alt = "Legolas 2 Thumbnail"/></span>
						<span class = "pic" onclick = "openPicture('pic11')"><img src = "images/photos/elf2_small.jpg" alt = "Elf 2 Thumbnail"/></span>
					</div>
				</div>
				
			</div>
		</div>
		
		<?php
			include __DIR__ . "/footer.php";
		?>
		   
  </body>
  
</html>