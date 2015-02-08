$(function(){
	//your jQuery here
	
	$('.menu-button').click(function (){
		$('#site-menu').css('right', '0');
		$('main').addClass('overlay');
		$('footer').addClass('overlay');
		$('.carousel-overlay').css('display', 'block');
		
	});
	$('.exit-button').click(function (){
		$('#site-menu').css('right', '-100%');
		$('main').removeClass('overlay');
		$('footer').removeClass('overlay');
		$('.carousel-overlay').css('display', 'none');
	});
	
});