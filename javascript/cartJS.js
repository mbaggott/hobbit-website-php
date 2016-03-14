var sum = 0;

window.onload = function() {

	/* Centre cart heading */
	var windowWidth = window.innerWidth;
	var column1Width = document.getElementById("column1").clientWidth;
	var heading = document.getElementById("cartHeading");
	var headingWidth = heading.clientWidth;
	heading.style.marginLeft = (windowWidth - column1Width - headingWidth) / 2 + "px";
	
	/* Centre cart table */
	var cart = document.getElementById("cartTable");
	var cartWidth = cart.clientWidth;
	cart.style.marginLeft = ((windowWidth - column1Width - cartWidth) / 2) + "px";

	$("#shoppingCart2").css("position", "fixed");
	$("#shoppingCart2").css("right", "5px");
	$("#shoppingCart2").css("top", "49px");
}

$( window ).unload(function() {
	$("#shoppingCart2").css("position", "block");
});

$(function(){
	$('#checkoutImage').on('click', function(e){
		window.location.href = "checkout.php";
	});
});

$(function(){
	$(document).ready( function(e){
			prod0();
	});         
});

$(function(){
	$('#plus0').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "1", operation: "add" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-0').html(dataArray['prod1Qty']);
				totalPrice();
				$('#td5-0').html('$' + dataArray['price']);
				var sub = dataArray['prod1Qty'] * dataArray['price'];
				$('#td6-0').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#plus1').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "2", operation: "add" },
			success: function(data) {
				var dataArray = JSON.parse(data);
				$('#td4-1').html(dataArray['prod2Qty']);
				totalPrice();
				$('#td5-1').html('$' + dataArray['price']);
				var sub = dataArray['prod2Qty'] * dataArray['price'];
				$('#td6-1').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#plus2').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "3", operation: "add" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-2').html(dataArray['prod3Qty']);
				totalPrice();
				$('#td5-2').html('$' + dataArray['price']);
				var sub = dataArray['prod3Qty'] * dataArray['price'];
				$('#td6-2').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#plus3').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "4", operation: "add" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-3').html(dataArray['prod4Qty']);
				totalPrice();
				$('#td5-3').html('$' + dataArray['price']);
				var sub = dataArray['prod4Qty'] * dataArray['price'];
				$('#td6-3').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#plus4').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "5", operation: "add" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-4').html(dataArray['prod5Qty']);
				totalPrice();
				$('#td5-4').html('$' + dataArray['price']);
				var sub = dataArray['prod5Qty'] * dataArray['price'];
				$('#td6-4').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#plus5').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "6", operation: "add" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-5').html(dataArray['prod6Qty']);
				totalPrice();
				$('#td5-5').html('$' + dataArray['price']);
				var sub = dataArray['prod6Qty'] * dataArray['price'];
				$('#td6-5').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#minus0').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "1", operation: "minus" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-0').html(dataArray['prod1Qty']);
				if (dataArray['prod1Qty'] > -1) {
					totalPrice();
					$('#td5-0').html('$' + dataArray['price']);
					var sub = dataArray['prod1Qty'] * dataArray['price'];
					$('#td6-0').html('$' + sub.toFixed(2));
				}
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#minus1').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "2", operation: "minus" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-1').html(dataArray['prod2Qty']);
				totalPrice();
				$('#td5-1').html('$' + dataArray['price']);
				var sub = dataArray['prod2Qty'] * dataArray['price'];
				$('#td6-1').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			} 
		});
	});         
});

$(function(){
	$('#minus2').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "3", operation: "minus" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-2').html(dataArray['prod3Qty']);
				totalPrice();
				$('#td5-2').html('$' + dataArray['price']);
				var sub = dataArray['prod3Qty'] * dataArray['price'];
				$('#td6-2').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#minus3').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "4", operation: "minus" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-3').html(dataArray['prod4Qty']);
				totalPrice();
				$('#td5-3').html('$' + dataArray['price']);
				var sub = dataArray['prod4Qty'] * dataArray['price'];
				$('#td6-3').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#minus4').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "5", operation: "minus" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-4').html(dataArray['prod5Qty']);
				totalPrice();
				$('#td5-4').html('$' + dataArray['price']);
				var sub = dataArray['prod5Qty'] * dataArray['price'];
				$('#td6-4').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

$(function(){
	$('#minus5').on('click', function(e){
		$.ajax({
            type: "POST",
			url: 'phpscripts/adjustCart.php',
			data: {	productNum: "6", operation: "minus" },
			success: function(data) { 
				var dataArray = JSON.parse(data);
				$('#td4-5').html(dataArray['prod6Qty']);
				totalPrice();
				$('#td5-5').html('$' + dataArray['price']);
				var sub = dataArray['prod6Qty'] * dataArray['price'];
				$('#td6-5').html('$' + sub.toFixed(2));
				},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});



function totalPrice() {
	$.ajax({
        type: "POST",
		url: 'phpscripts/getNumProducts.php',
		data: {	 },
		success: function(data) { 
			var dataArray = JSON.parse(data);
			$('#cartAmount').html(dataArray['cartTotal']);
			var total = 0;
			for (x = 0; x < 6; x++) {
				var id = "td6-" + x;
				var element = document.getElementById(id);
				var value = element.innerHTML;
				value = value.replace("$", '');
				var f = parseFloat(value);
				if(isNaN(f) == false) {
					total = total + f;
				}
				$('#td7').html('$' + total.toFixed(2));
			}
		},
		error: function() {
			alert("Error retrieving data!");
		}
	});
}

function prod0() {
	$.ajax({
        type: "POST",
		url: 'phpscripts/getProductDetails.php',
		data: {	prodQty: "td4-0" },
		success: function(data) {
			var array = JSON.parse(data);
			$('#td1-' + array.prodNum).html(array.code);
			$('#td2-' + array.prodNum).html(array.description);
			$("#img0").attr("src", "images/shopping/" + array.filename);
			$("#img0").attr("width", "50px");
			$("#img0").attr("height", "50px");
			$('#td4-' + array.prodNum).html(array.qty);
			$('#td5-' + array.prodNum).html('$' + array.price);
			var sub = array.qty * array.price;
			$('#td6-' + array.prodNum).html('$' + sub.toFixed(2));
			sum += array.qty * array.price;
			$('#td7').html('$' + sum.toFixed(2));
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		}
	});
	setTimeout(function () {
		prod1();
	}, 100);
}

function prod1() {
	$.ajax({
		type: "POST",
		url: 'phpscripts/getProductDetails.php',
		data: {	prodQty: "td4-1" },
		success: function(data) {
			var array = JSON.parse(data);
			$('#td1-' + array.prodNum).html(array.code);
			$('#td2-' + array.prodNum).html(array.description);
			$("#img1").attr("src", "images/shopping/" + array.filename);
			$("#img1").attr("width", "50px");
			$("#img1").attr("height", "50px");
			$('#td4-' + array.prodNum).html(array.qty);
			$('#td5-' + array.prodNum).html('$' + array.price);
			var sub = array.qty * array.price;
			$('#td6-' + array.prodNum).html('$' + sub.toFixed(2));
			sum += array.qty * array.price;
			$('#td7').html('$' + sum.toFixed(2));
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		}
	});
	setTimeout(function () {
		prod2();
	}, 100);
}

function prod2() {
	$.ajax({
        type: "POST",
		url: 'phpscripts/getProductDetails.php',
		data: {	prodQty: "td4-2" },
		success: function(data) {
			var array = JSON.parse(data);
			$('#td1-' + array.prodNum).html(array.code);
			$('#td2-' + array.prodNum).html(array.description);
			$("#img2").attr("src", "images/shopping/" + array.filename);
			$("#img2").attr("width", "50px");
			$("#img2").attr("height", "50px");
			$('#td4-' + array.prodNum).html(array.qty);
			$('#td5-' + array.prodNum).html('$' + array.price);
			var sub = array.qty * array.price;
			$('#td6-' + array.prodNum).html('$' + sub.toFixed(2));
			sum += array.qty * array.price;
			$('#td7').html('$' + sum.toFixed(2));	
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		}
	});
	setTimeout(function () {
		prod3();
	}, 100);
}

function prod3() {
	$.ajax({
        type: "POST",
		url: 'phpscripts/getProductDetails.php',
		data: {	prodQty: "td4-3" },
		success: function(data) {
			var array = JSON.parse(data);
			$('#td1-' + array.prodNum).html(array.code);
			$('#td2-' + array.prodNum).html(array.description);
			$("#img3").attr("src", "images/shopping/" + array.filename);
			$("#img3").attr("width", "50px");
			$("#img3").attr("height", "50px");
			$('#td4-' + array.prodNum).html(array.qty);
			$('#td5-' + array.prodNum).html('$' + array.price);
			var sub = array.qty * array.price;
			$('#td6-' + array.prodNum).html('$' + sub.toFixed(2));
			sum += array.qty * array.price;
			$('#td7').html('$' + sum.toFixed(2));	
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		}
	});
	setTimeout(function () {
		prod4();
	}, 100);
}

function prod4() {
	$.ajax({
        type: "POST",
		url: 'phpscripts/getProductDetails.php',
		data: {	prodQty: "td4-4" },
		success: function(data) {
			var array = JSON.parse(data);
			$('#td1-' + array.prodNum).html(array.code);
			$('#td2-' + array.prodNum).html(array.description);
			$("#img4").attr("src", "images/shopping/" + array.filename);
			$("#img4").attr("width", "50px");
			$("#img4").attr("height", "50px");
			$('#td4-' + array.prodNum).html(array.qty);
			$('#td5-' + array.prodNum).html('$' + array.price);
			var sub = array.qty * array.price;
			$('#td6-' + array.prodNum).html('$' + sub.toFixed(2));
			sum += array.qty * array.price;
			$('#td7').html('$' + sum.toFixed(2));
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		}
	});
	setTimeout(function () {
		prod5();
	}, 100);
}

function prod5() {
	$.ajax({
        type: "POST",
		url: 'phpscripts/getProductDetails.php',
		data: {	prodQty: "td4-5" },
		success: function(data) {
			var array = JSON.parse(data);
			$('#td1-' + array.prodNum).html(array.code);
			$('#td2-' + array.prodNum).html(array.description);
			$("#img5").attr("src", "images/shopping/" + array.filename);
			$("#img5").attr("width", "50px");
			$("#img5").attr("height", "50px");
			$('#td4-' + array.prodNum).html(array.qty);
			$('#td5-' + array.prodNum).html('$' + array.price);
			var sub = array.qty * array.price;
			$('#td6-' + array.prodNum).html('$' + sub.toFixed(2));
			sum += array.qty * array.price;
			$('#td7').html('$' + sum.toFixed(2));
		},
		error: function(xhr, status, error) {
			var err = eval("(" + xhr.responseText + ")");
			alert(err.Message);
		}
	});
}
