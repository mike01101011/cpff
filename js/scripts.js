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