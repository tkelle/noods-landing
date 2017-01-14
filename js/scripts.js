$(document).ready(function() {
	$('#bgScene').parallax();
	$('#contentScene').parallax();
});

$(window).load(function() {
	var bgElement = document.getElementsByClassName('randomBgImage');

	var bodyWidth = $(document).width();
	var bodyHeight = $(document).height();

	$.each(bgElement,function() {
		var randPosX = Math.floor((Math.random()*bodyWidth));
		$(this).css('left', randPosX);
	});

	$.each(bgElement,function() {
		var randPosY = Math.floor((Math.random()*bodyHeight));
		$(this).css('top', randPosY);
	});
});

