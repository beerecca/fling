// GOOGLE LOOKUP ------------------------------------------------------------------

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initialize() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  // populate the address fields in the form.
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    fillInAddress();
  });
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
          geolocation));
    });
  }
}


$(document).ready(function() {

// QUOTES ------------------------------------------------------------------


var currentIndex = 0;
var $quotes = $("blockquote");
var numQuotes = $quotes.length;

// console.log("numquotes " + numQuotes);

$quotes.hide().eq(currentIndex).show();

setInterval(function() {changeQuote()}, 4000);

function changeQuote() {
	$quotes.eq(currentIndex).fadeOut();
	if (currentIndex < numQuotes - 1) {
	currentIndex++;
	}
	else {
	currentIndex = 0;
	};
	$quotes.eq(currentIndex).fadeIn();
}



// STICKY HEADER -------------------------------------------------------------


// $('.content').waypoint(function() {
//   alert('Basic example callback triggered.');
// });

// $('.sticky').waypoint('sticky');

/*
	var headerIsOpen = true;

	$(window).scroll(function() {
		
		if(headerIsOpen){
			//close the header
			headerIsOpen = false;

			$('.branding').animate({"height":"10px"}, "fast",function(){
				$('.branding, nav').css({"position":"fixed", 'z-index':100});
				$('nav').css({top:0,"margin-top":"10px", "box-shadow":"0px 0px 20px"});
				$('.content').css({"padding-top":"190px"});
			});
			$('.branding h1, .branding img').fadeOut("fast");
			$('.logo-small').fadeIn("fast");
			$('nav ul').css({paddingLeft : "5%"});
			
		} else if (!headerIsOpen && $(window).scrollTop() === 0){
			//open the header
			headerIsOpen = true;
			
			$('.logo-small').fadeOut("fast", function(){
				$('nav ul').css({paddingLeft : "15%"});	
			});
			$('nav').animate({top:205},"fast",function(){
				$('nav').css({"position":"static", 'z-index':100, "margin-top":"0px", "box-shadow":"0px"});
			});		
			$('.branding').animate({"height":"40%"}, "fast", function(){
				$('.branding').css({"position":"static", 'z-index':100});
				$('.content').css({"padding-top":"0px"});
			});
			$('.branding h1, .branding img').fadeIn("fast");
			
		}

	});*/ /*end scroll*/


// TERMS OVERLAY -------------------------------------------------------------

$('.terms-activate').click(function(event) {
	event.preventDefault();
	$('.overlay').css({"height":$(document).height()});
	$('.terms-text').fadeIn("slow");
	$('.overlay').fadeIn("slow");
	
}); /*end click*/

$('.exit').click(function(event) {
	$('.terms-text').fadeOut("slow");
	$('.overlay').fadeOut("slow");

}); /*end click*/


// TERMS CHECKBOX ---------------------------------------------------------

var checkbox = $("input[type='checkbox']");

checkbox.click(function() {
	$(".submit").attr("disabled", !checkbox.is(":checked"));
});


// SIMPLECART -------------------------------------------------------------

simpleCart({
	checkout: { 
		type: "PayPal" , 
		email: "you@yours.com" 
	},
	currency: "NZD",
	cartStyle: "div",
    cartColumns: [
    	{ view: "image" , attr: "thumb", label: false } ,
        { attr: "name" , label: "Name" } ,
        { attr: "price" , label: "Price", view: 'currency' } ,
        { view: "decrement" , label: false , text: "<button>-</button>" } ,
        { attr: "quantity" , label: "Quantity" } ,
        { view: "increment" , label: false , text: "<button>+</button>" } ,
        { attr: "total" , label: "Subtotal", view: 'currency' } ,
        { view: "remove" , text: "<button>x</button>" , label: "Remove" }
    ]
});


simpleCart.shipping(function(){
	var deliveryCost = $("#delivery-options option:selected").data('cost');
	return deliveryCost;
});


$('#delivery-options').change(function() {

/* DEBUG
	var total = simpleCart.shipping();
	console.log("shipping total is " + total);
	
	var grandTotal = simpleCart.grandTotal();
	console.log("grand total is " + grandTotal);*/
		
	simpleCart.update();

});


simpleCart.on('ready', function(){
  
/*	DEBUG
	console.log("quantity is " + simpleCart.quantity()); */

	if (simpleCart.quantity() === 0) {
		$(".simpleCart_items").hide();
		$(".cart-details").before("<p>Your cart is empty!</p>");
	};
});



$(".item_add").click(function() {

	$("img.secret").stop(true, true).animate({left: '+=675', top: '-=250', height: '50px', width: '50px', opacity: "0"}, 1000, function() {
		$("img.secret").stop(true, true).css({left: '-=675', top: '+=250', height: 'auto', width: '100%', opacity: "1"});

	});

});


// WISHLIST-------------------------------------------------------------

$(".icon.fav").click(function() {
	$(this).toggleClass("active");
});

// $(".icon.fav").click(function() {
// 	$(this).removeClass("active");
// });



// COPYRIGHT-------------------------------------------------------------

$('#menu-footer-nav:last-child').append('<li style="border-right:0px">© Rebecca Hill 2014. This site was created for educational purposes only.</li>');


// HOME PROMO IMAGE-------------------------------------------------------------

$(window).on('resize load', function() {
var promoHeight = $(".promo-text").height();

$(".promo-img img").css({"height":promoHeight});

});

// RESPONSIVE NAV-------------------------------------------------------------

/*$(window).resize(function() {
var windowWidth = $(window).width();


if (windowWidth < 1287) {
	$('input[type="search"], a.cart').fadeOut("fast");

	$("#menu-main-nav .menu-item:last-of-type").after("<p>Bexy</p>");
}

if (windowWidth > 1287) {
	$('input[type="search"], a.cart').fadeIn("fast");
}

});*/


}); /*end ready*/

