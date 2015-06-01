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

	$(".carousel").slick({
		autoplay: true,
		fade: true,
		dots: false,
		cssEase: 'linear',
		infinite: true,
		autoplaySpeed: 5000,
		slidesToShow: 1,
		arrows: false,
		centerMode: true
		
	});

	$('.poster-images').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
        dots: true,
		responsive: [
		    {
		      breakpoint: 964,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		      }
		    },
		    {
		    	breakpoint: 768,
		    	settings: {
		    		slidesToShow: 2,
			        slidesToScroll: 2,
		    		arrows: false,
		    	}
		    },
		    {
		      breakpoint: 630,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
	    		arrows: false,
		      }
		    }
		]
	});

	$('.photo-sample').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
        dots: true,
		responsive: [
		    {
		      breakpoint: 964,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		      }
		    },
		    {
		    	breakpoint: 768,
		    	settings: {
		    		slidesToShow: 2,
			        slidesToScroll: 2,
		    		arrows: false,
		    	}
		    },
		    {
		      breakpoint: 630,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
	    		arrows: false,
		      }
		    }
		]
	});
});


//Volunteer Submit Button - start
function myFunction() {
	document.getElementById("volunteer-message").style.display = "none";
	document.getElementById("volunteer").style.display="none";
	document.getElementById("volunteer-thank").style.display="block";
}
//Volunteer Submit Button - end


// Newsletter - start
function newsletter() {
	document.getElementById("newsletter-form").style.display = "none";
	document.getElementById("newsletter-thank").style.display = "block";
}
// Newsletter - end


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
  delay: '3.5',
  rotation:'720',
  transformOrigin: '50% 50%',
});

var present = document.getElementsByClassName("present")
TweenMax.to(present, '3', {
	delay: '2.5',
	opacity: '1',
});

var program = document.getElementsByClassName("programTitle")
TweenMax.to(program, '3', {
	delay: '3.5',
	opacity: '1',
});

var lead = document.getElementsByClassName("leadSponsor")
TweenMax.to(lead, '3', {
	delay: '3.5',
	opacity: '1',
});

var arrow = document.getElementsByClassName("arrow")
TweenMax.from(arrow, '3', {
	delay: '2.25',
	opacity:'0',
	onComplete:loop
});

function loop() {
	TweenMax.to(arrow, '.75', {
		ease: Power1.easeInOut,
		opacity: '1',
		top:"99%",
		repeat:-1,
		yoyo:true,
	});
}


$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});