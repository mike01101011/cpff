$(function(){
	//your jQuery here
	
	//When click menu button, show menu
	$('.menu-button').click(function() {
		$('nav').addClass('open');
		$('body').css('overflow','hidden');
		
		//rotating the reel when menu opens using Greensock Animation
		var reel = document.getElementsByClassName("menu-reel")
		TweenMax.to(reel, '3', {
		  delay: '1.5',
		  rotation: '360',
		  transformOrigin: '50% 50%',
		  
		});
	});

	//When click on exit button, close menu button
	$('.exit-button').click(function() {
		$('nav').removeClass('open');
		$('body').css('overflow','visible');
	});

});


// Greensock Animation:
// - Animating Text
var text = document.getElementsByClassName("text")
TweenMax.to(text, '1', {
  delay: '1',
  opacity: '1',
});

// - Animating the Reel
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