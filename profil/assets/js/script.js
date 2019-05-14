$(document).ready(function(){
	$('#slides').superslides({
		animation: 'fade',
		play: 4000
	})	
	var typed = new Typed(".typedtext", {
		strings: ["Développeur Web et Mobile."],
		typeSpeed: 100,
		loop: true,
		startDelay: 1000,
		showCursor: false
	});

});