var bgElement = document.getElementsByClassName('randomBgImage');
var bodyWidth = $(document).width();
var bodyHeight = $(document).height();

$(window).load(function() {
	$.each(bgElement,function() {
		var randPosX = Math.floor((Math.random()*bodyWidth-100));
		$(this).css('left', randPosX);
	});

	$.each(bgElement,function() {
		var randPosY = Math.floor((Math.random()*bodyHeight-100));
		$(this).css('top', randPosY);
	});
});

$(window).resize(function() {
  $.each(bgElement,function() {
  	var randPosX = Math.floor((Math.random()*bodyWidth));
  	$(this).css('left', randPosX);
  });

  $.each(bgElement,function() {
  	var randPosY = Math.floor((Math.random()*bodyHeight));
  	$(this).css('top', randPosY);
  });
});

$(document).ready(function() {
	$('#bgScene').parallax();
	$('#contentScene').parallax();

	$('.mobileNavTrigger').click(function() {
		// $('.bgShader').toggleClass("bgShader--active"),
		$('.bgShader').fadeToggle( "slow", "linear" ),
		// $('.navContainer').toggleClass("navContainer--active");
		$('.mobileNavTrigger').toggleClass("mobileNavTrigger--active"),
		$('.navContainer').fadeToggle( "slow", "linear" );
	});
});


