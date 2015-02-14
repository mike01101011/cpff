$(function(){
	//your jQuery here
	$('.menu-button').click(function (){
		$('#site-menu').css('right', '0');
		$('body').css('overflow','hidden');
		$('main').css({
			'background':'rgba(0,0,0,0.75)',
			'z-index':'100',
			'transition':'all 0.75s',
		});
		$('footer').css({
			'background':'rgba(0,0,0,0.75)',
			'z-index':'100',
			'transition':'all 0.75s'
		});
		$('.carousel').css('opacity', '.25');
		$('.identity').css('opacity', '.25');
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
		$('.identity').css('opacity', '1');
	});

	var windw = this;
	$.fn.followTo = function ( pos ) {
	    var $this = this,
	        $window = $(windw);
	    
	    $window.scroll(function(e){
	        if ($window.scrollTop() > pos) {
	            $this.css({
	                position: 'absolute',
	                top: pos
	            });
	        } else {
	            $this.css({
	                position: 'fixed',
	                top: 0
	            });
	        }
	    });
	};
	$('.identity').followTo(300);
	// figure out the percentage value of the height of carousel at different widths

});