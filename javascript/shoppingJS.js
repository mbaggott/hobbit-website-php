window.onload = function() {

	/* Centre shopping heading */
	var shoppingWidth = document.getElementById("shoppingContainer").clientWidth;
	var heading = document.getElementById("shoppingHeading");
	var headingWidth = heading.clientWidth;
	heading.style.marginLeft = (shoppingWidth - headingWidth) / 2 + "px";
	
	/* Centre shopping container */
	var windowWidth = window.innerWidth;
	var column1Width = document.getElementById("column1").clientWidth;
	var shopping = document.getElementById("shoppingContainer");
	var shoppingWidth = shopping.clientWidth;
	shopping.style.marginLeft = (windowWidth - column1Width - shoppingWidth) / 2 + "px";
	
	$("#shoppingCart2").css("position", "fixed");
	$("#shoppingCart2").css("right", "5px");
	$("#shoppingCart2").css("top", "49px");
	
	
}

$( window ).unload(function() {
	$("#shoppingCart2").css("position", "block");
});

$(function(){
	$('#button1').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/addToCart.php',
			data: {	productNum: "1" },
			success: function(data) { 
				$('#cartAmount').html(data);
			},
			error: function() {
				alert("Error processing form!");
			}
		
            
		});
	});         
});

$(function(){
	$('#button2').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/addToCart.php',
			data: {	productNum: "2" },
			success: function(data) { 
				$('#cartAmount').html(data);
			},
			error: function() {
				alert("Error processing form!");
			}
		
            
		});
	});         
});

$(function(){
	$('#button3').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/addToCart.php',
			data: {	productNum: "3" },
			success: function(data) { 
				$('#cartAmount').html(data);
			},
			error: function() {
				alert("Error processing form!");
			}
		
            
		});
	});         
});

$(function(){
	$('#button4').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/addToCart.php',
			data: {	productNum: "4" },
			success: function(data) { 
				$('#cartAmount').html(data);
			},
			error: function() {
				alert("Error processing form!");
			}
		
            
		});
	});         
});

$(function(){
	$('#button5').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/addToCart.php',
			data: {	productNum: "5" },
			success: function(data) { 
				$('#cartAmount').html(data);
			},
			error: function() {
				alert("Error processing form!");
			}
		
            
		});
	});         
});

$(function(){
	$('#button6').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/addToCart.php',
			data: {	productNum: "6" },
			success: function(data) { 
				$('#cartAmount').html(data);
			},
			error: function() {
				alert("Error processing form!");
			}
		
            
		});
	});         
});