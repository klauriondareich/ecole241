$(document).ready(function(){
	$('#slides').superslides({
		animation: 'fade',
		play: 4000
	})	
	var typed = new Typed(".text", {
		strings: ["Développeur Web et Mobile."],
		typeSpeed: 100,
		loop: true,
		startDelay: 1000,
		showCursor: false
	});

	/*this line of code is for the carrousel*/

		$('.owl-carousel').owlCarousel({
	    rtl:true,
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	})

	/*competence shapes*/

	 $('.chart').easyPieChart({
	 	easing: 'easeInOut',
	 	barColor: '#fff',
	 	trackColor: false,
	 	scaleColor: false,
	 	lineWidth: 3,
	 	size: 160
        });
});