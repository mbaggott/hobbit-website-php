window.onload = function() {

	/* Centre summary page */
	var windowWidth = window.innerWidth;
	var column1Width = document.getElementById("column1").clientWidth;
	var summary = document.getElementById("summaryContainer");
	var summaryWidth = summary.clientWidth;
	summary.style.marginLeft = (windowWidth - column1Width - summaryWidth) / 2 + "px";
}

$(function(){
	$('#logoutButton').on('click', function(e){
        	
		$.ajax({
            url: 'phpscripts/logoutProcess.php',
			success: function(data) { 
				window.location.assign("index.php");
			},
            error: function() {
				alert("Error processing logout!");
			}
		});
	});         
});

$(function(){
	$('#keepShopping').on('click', function(e){
		$.ajax({
            url: 'phpscripts/resetValues.php',
			success: function(data) { 
				window.location.assign("shopping.php");
			},
            error: function() {
				alert("Error processing logout!");
			}
		}); 
	});         
});