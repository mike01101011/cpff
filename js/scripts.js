$(function(){
	//your jQuery here
	$('.menu-button').click(function() {
		$('nav').addClass('open');
		$('body').css('overflow','hidden');
	});

	$('.exit-button').click(function() {
		$('nav').removeClass('open');
		$('body').css('overflow','visible');
	});

});