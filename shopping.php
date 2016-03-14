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
	<script type = "text/javascript" src = "javascript/shoppingJS.js"></script>
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
			
			if(file_exists("phpscripts/products.txt")) {
				$array = file("phpscripts/products.txt");
				$productDetails = array();
				$productDetails[0] = array();
				$productDetails[1] = array();
				for ($y = 0; $y < count($array); $y++) {
					$lineArray = explode("\t", $array[$y]);
					for ($x = 0; $x < count($lineArray); $x = $x + 2) {
						$key = $lineArray[$x];
						$value = $lineArray[$x + 1];
						$productDetails[$y][$key] = $value; 
					}
				}
			}
		?>
				
		<div id = "bodywrapper">
			
			<?php include __DIR__ . "/navMenu.php";?>
			
			<div class = "column" id = "column2">
				<div id = "shoppingContainer">
					<div class = "pageHeading" id = "shoppingHeading">Shopping Mania</div>
					<div class = "shoppingTable" id = "shoppingTable">
						<div>
							<div class = "heading"><div id = "button1" class = "imageHolder"><img class = "addToCart" src = "images/addToCart.png" alt = "Add To Cart" width = "30" height = "30" /></div><div class = "headingText"><?php echo $productDetails[0]['description'];?></div></div>
							<div class = "heading"><div id = "button2" class = "imageHolder"><img class = "addToCart" src = "images/addToCart.png" alt = "Add To Cart" width = "30" height = "30" /></div><div class = "headingText"><?php echo $productDetails[1]['description'];?></div></div>
							<div class = "heading"><div id = "button3" class = "imageHolder"><img class = "addToCart" src = "images/addToCart.png" alt = "Add To Cart" width = "30" height = "30" /></div><div class = "headingText"><?php echo $productDetails[2]['description'];?></div></div>
						</div>
						<div>
							<div class = "placeholder"><img src = "<?php echo "images/shopping/" . $productDetails[0]['filename'];?>" alt = "Product 1" width = "174" height = "174"/></div>
							<div class = "placeholder"><img src = "<?php echo "images/shopping/" . $productDetails[1]['filename'];?>" alt = "Product 2" width = "174" height = "174"/></div>
							<div class = "placeholder"><img src = "<?php echo "images/shopping/" . $productDetails[2]['filename'];?>" alt = "Product 3" width = "174" height = "174"/></div>
						</div>
						<div>
							<div class = "price"><?php echo '$' . $productDetails[0]['price'];?></div>
							<div class = "price"><?php echo '$' . $productDetails[1]['price'];?></div>
							<div class = "price"><?php echo '$' . $productDetails[2]['price'];?></div>
						</div>
						<div>
							<div class = "description"><?php echo $productDetails[0]['blurb'];?></div>
							<div class = "description"><?php echo $productDetails[1]['blurb'];?></div>
							<div class = "description"><?php echo $productDetails[2]['blurb'];?></div>
						</div>
						<div>
							<div class = "heading"><div id = "button4" class = "imageHolder"><img class = "addToCart" src = "images/addToCart.png" alt = "Add To Cart" width = "30" height = "30" /></div><div class = "headingText"><?php echo $productDetails[3]['description'];?></div></div>
							<div class = "heading"><div id = "button5" class = "imageHolder"><img class = "addToCart" src = "images/addToCart.png" alt = "Add To Cart" width = "30" height = "30" /></div><div class = "headingText"><?php echo $productDetails[4]['description'];?></div></div>
							<div class = "heading"><div id = "button6" class = "imageHolder"><img class = "addToCart" src = "images/addToCart.png" alt = "Add To Cart" width = "30" height = "30" /></div><div class = "headingText"><?php echo $productDetails[5]['description'];?></div></div>
						</div>
						<div>
							<div class = "placeholder"><img src = "<?php echo "images/shopping/" . $productDetails[3]['filename'];?>" alt = "Product 4" width = "174" height = "174"/></div>
							<div class = "placeholder"><img src = "<?php echo "images/shopping/" . $productDetails[4]['filename'];?>" alt = "Product 5" width = "174" height = "174"/></div>
							<div class = "placeholder"><img src = "<?php echo "images/shopping/" . $productDetails[5]['filename'];?>" alt = "Product 6" width = "174" height = "174"/></div>
						</div>
						<div>
							<div class = "price"><?php echo '$' . $productDetails[3]['price'];?></div>
							<div class = "price"><?php echo '$' . $productDetails[4]['price'];?></div>
							<div class = "price"><?php echo '$' . $productDetails[5]['price'];?></div>
						</div>
						<div>
							<div class = "description"><?php echo $productDetails[3]['blurb'];?></div>
							<div class = "description"><?php echo $productDetails[4]['blurb'];?></div>
							<div class = "description"><?php echo $productDetails[5]['blurb'];?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			include __DIR__ . "/footer.php";
		?>
		   
  </body>
 
</html>