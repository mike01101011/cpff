$(function(){
	//your jQuery here
	
	$('.menu-button').click(function (){
		$('#site-menu').css('right', '0');
		$('main').addClass('overlay');
		
	});
	$('.exit-button').click(function (){
		$('#site-menu').css('right', '-100%');
		$('main').removeClass('overlay');
	});
});
