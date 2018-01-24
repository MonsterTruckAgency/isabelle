$(document).ready(function () {

	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 210,

	});
	$('.post').addClass("hidden").viewportChecker({
		classToAdd: 'animated fadeInUp',
		offset: 100
	});
	$('.postleft').addClass("hidden").viewportChecker({
		classToAdd: 'animated slideInLeft',
		offset: 100
	});
	$('.postright').addClass("hidden").viewportChecker({
		classToAdd: 'animated slideInRight',
		offset: 100
	});
	$('.handle').on('click', function () {
		$('.mobilenav ul').toggleClass('show');
	});
});