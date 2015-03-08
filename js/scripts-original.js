$(function(){
	//your jQuery here
	$('.menu-button').click(function (){
		$('#site-menu').css('right', '0');
		$('body').css('overflow','hidden');
		$('main').css({
			'background':'rgba(0,0,0,0.75)',
			'z-index':'100',
			'transition':'all 0.75s'
		});
		$('footer').css({
			'background':'rgba(0,0,0,0.75)',
			'z-index':'100',
			'transition':'all 0.75s'
		});
		$('.carousel').css('opacity', '.25');
	});

	$('.exit-button').click(function (){
		$('#site-menu').css('right', '-100%');
		$('body').css('overflow','visible');
		$('main').css({
			'background':'white',
			'z-index':'0',
			'transition':'all 0.75s'
		});
		$('footer').css({
			'background':'white',
			'z-index':'0',
			'transition':'all 0.75s'
		});
		$('.carousel').css('opacity', '1');
	});



});

var text = document.getElementsByClassName("text")
TweenMax.to(text, '1', {
  delay: '1',
  opacity: '1',
});

var reel = document.getElementsByClassName("reel")
TweenMax.to(reel, '3', {
  delay: '2', 
  opacity: '1',
})
TweenMax.to(reel, '3', {
  delay: 3.5,
  rotation:'720',
  transformOrigin: '50% 50%',
});