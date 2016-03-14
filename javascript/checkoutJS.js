window.onload = function() {

	/* Centre checkout form */
	var windowWidth = window.innerWidth;
	var column1Width = document.getElementById("column1").clientWidth;
	var form = document.getElementById("checkoutContainer");
	var formWidth = form.clientWidth;
	form.style.marginLeft = (windowWidth - column1Width - formWidth) / 2 + "px";
	
	/* Centre form heading */
	var formWidth = document.getElementById("checkoutContainer").clientWidth;
	var headingWidth = document.getElementById("checkoutHeading").clientWidth;
	document.getElementById("checkoutHeading").style.marginLeft = (formWidth - headingWidth) / 2 + "px";
	
	$("#shoppingCart2").css("position", "fixed");
	$("#shoppingCart2").css("right", "5px");
	$("#shoppingCart2").css("top", "49px");
	
}

$( window ).unload(function() {
	$("#shoppingCart2").css("position", "block");
});

$(function(){
	$('#checkoutSubmit').on('click', function(e){
        
		e.preventDefault();  
		
		$.ajax({
			type: $('#checkoutContainer').attr('method'),
			url: 'phpscripts/emptyCart.php',
			success: function() {
				if (validateCheckoutForm()) {
				document.getElementById("checkoutContainer").setAttribute('action', 'summary.php');
				$('#cartAmount').html(0);
				document.getElementById("checkoutContainer").submit();
				}
			},
			error: function() {
				alert("Error processing form!");
			}
		});
	});         
});

function validateCheckoutForm() {

	if( !$('#checkoutCreditCard').val() ) {
		hideAllErrors();
		$('#checkoutCreditCardError1').css("display", "inline");
		$(checkoutCreditCard).select();
		$(checkoutCreditCard).focus();
		return false;
	}
	
	else if( !(validateCreditCard($('#checkoutCreditCard').val()) )) {
		hideAllErrors();
		$('#checkoutCreditCardError2').css("display", "inline");
		$(checkoutCreditCard).select();
		$(checkoutCreditCard).focus();
		return false
	}

	else if( !$('#checkoutExpiry').val() ) {
		hideAllErrors();
		$('#checkoutExpiryError1').css("display", "inline");
		$(checkoutExpiry).select();
		$(checkoutExpiry).focus();
		return false;
	}
	
	else if( !validateExpiry($('#checkoutExpiry').val()) ) {
		hideAllErrors();
		$('#checkoutExpiryError2').css("display", "inline");
		$(checkoutExpiry).select();
		$(checkoutExpiry).focus();
		return false
	}
	
	else if( !$('#checkoutAddress').val() ) {
		hideAllErrors();
		$('#checkoutAddressError').css("display", "inline");
		$(checkoutAddress).select();
		$(checkoutAddress).focus();
		return false
	}
	
	else if( !$('#checkoutCity').val() ) {
		hideAllErrors();
		$('#checkoutCityError').css("display", "inline");
		$(checkoutCity).select();
		$(checkoutCity).focus();
		return false
	}
	
	else if( !$('#checkoutState').val() ) {
		hideAllErrors();
		$('#checkoutStateError').css("display", "inline");
		$(checkoutState).select();
		$(checkoutState).focus();
		return false
	}
	
	else if( !$('#checkoutCountry').val() ) {
		hideAllErrors();
		$('#checkoutCountryError').css("display", "inline");
		$(checkoutCountry).select();
		$(checkoutCountry).focus();
		return false
	}
	
	return true;
	
}

function validateCreditCard(elementValue) {
	var regex = new RegExp(/[0-9]{4}[ ]?[0-9]{4}[ ]?[0-9]{4}[ ]?[0-9]{4}/);
	if(regex.test(elementValue)) {
		return true;
	}
	return false;
}

function validateExpiry(elementValue) {
	var date = document.getElementById("date").value;
	var dateCompare = elementValue.replace(/\\|\/|\s+/g,"");
	var reverseDate;
	reverseDate = "" + dateCompare.charAt(2);
	reverseDate += "" + dateCompare.charAt(3);
	reverseDate += "" + dateCompare.charAt(0);
	reverseDate += "" + dateCompare.charAt(1);
	var regex = new RegExp(/^([0-9]{1}[0-9]{1})[\/| |\\]?([0-9]{1}[0-9]{1})$/);
	if(regex.test(elementValue) && reverseDate >= date) {
		return true;
	}
	return false;
	
}

function hideAllErrors() {
	$('#checkoutCreditCardError1').css("display", "none");
	$('#checkoutCreditCardError2').css("display", "none");
	$('#checkoutExpiryError1').css("display", "none");
	$('#checkoutExpiryError2').css("display", "none");
	$('#checkoutAddressError').css("display", "none");
	$('#checkoutCityError').css("display", "none");
	$('#checkoutStateError').css("display", "none");
	$('#checkoutCountryError').css("display", "none");
	}
