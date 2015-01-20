$(function(){
	//your jQuery here
	
		$('.menu-button').click(function (){
			$('#site-menu').css('right', '0');
		});
		$('.exit-button').click(function (){
			$('#site-menu').css('right', '-100%');
		});
	

});
