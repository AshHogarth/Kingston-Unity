$(document).ready(function(){

	$("#nav-icon").on("click", function(e){
		e.preventDefault();
		$("nav > ul").slideToggle();
		$( this ).toggleClass("open");
	});

	$(".banner-cycle").owlCarousel({
		slideSpeed: 300,
		singleItem: !0,
		navigation: false,
		navigationText: false,
		pagination: false,
		autoPlay: 8000
	});

	enquire.register("screen and (min-width:768px)", {
		match : function() {
			$(".box-info > p").equalHeights();
		}
	});

	$( '.accordion-content > p:empty' ).remove();

	new WOW().init();
	
	$("#enquiry-form").validate({
		rules: {
			name: "required",
			telno: "required",
			enquiry: "required",
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			name: "Please provide a contact name",
			telno: "Please provide a telephone number",
			enquiry: "Please provide an enquiry",
			email: "Please provide a valid email address"
		}
	});

	$("#information-request").validate({
		rules: {
			name: "required",
			address: "required",
			city: "required",
			postcode: "required",
			telno: "required",
			product: "required",
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			name: "Please provide your full name",
			address: "Please fill in your current residence",
			city: "Please type in your current city",
			postcode: "Please type in your current postcode",
			telno: "Please provide a contact number",
			email: "Please provide a valid email address",
			products: "Please choose a product"
		}
	});
});