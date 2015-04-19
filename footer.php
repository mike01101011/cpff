	<footer>
	  <div class="container">
	  	<svg class="footer-reel" viewBox="0 0 244.951 244.421">
	  	  <path d="M122.478 0C54.838 0 0 54.834 0 122.474S54.84 244.95 122.48 244.95c67.64 0 122.473-54.835 122.473-122.476C244.953 54.834 190.123 0 122.483 0h-.005zm1.25 137.48c0 4.52-3.664 8.184-8.184 8.184-4.518 0-8.182-3.664-8.182-8.184s3.67-8.18 8.19-8.18 8.18 3.67 8.18 8.19l-.004-.01zm-3.676-15.006c0-1.34 1.092-2.424 2.432-2.424s2.43 1.084 2.43 2.424c0 1.34-1.08 2.424-2.42 2.424s-2.42-1.09-2.42-2.43l-.022.006zm-12.99-14.996c4.52 0 8.19 3.664 8.19 8.183 0 4.52-3.66 8.192-8.18 8.192s-8.18-3.66-8.18-8.18 3.66-8.18 8.18-8.18l-.01-.014zm-86.67-15.455c0-18.745 15.2-33.942 33.94-33.942 18.75 0 33.95 15.2 33.95 33.952 0 18.75-15.19 33.94-33.94 33.94-18.74 0-33.94-15.19-33.94-33.94l-.01-.01zm71.83 131.524c-18.74 0-33.938-15.195-33.938-33.94 0-18.747 15.2-33.942 33.938-33.942 18.74 0 33.94 15.195 33.94 33.943.002 18.744-15.2 33.94-33.94 33.94zm28.79-116.373c0-4.52 3.66-8.183 8.18-8.183s8.19 3.665 8.19 8.184c0 4.52-3.658 8.184-8.18 8.184-4.52 0-8.18-3.664-8.18-8.184h-.01zm16.67 30.004c-4.51 0-8.18-3.664-8.18-8.184s3.67-8.182 8.18-8.182c4.52 0 8.19 3.663 8.19 8.182s-3.66 8.184-8.18 8.184h-.01zm-20.31-83.038c0-18.744 15.196-33.94 33.94-33.94 18.746 0 33.943 15.196 33.943 33.94s-15.197 33.943-33.943 33.943c-18.744 0-33.94-15.197-33.94-33.943zm71.825 131.223c-18.748 0-33.943-15.197-33.943-33.94 0-18.747 15.197-33.942 33.943-33.942 18.742 0 33.94 15.202 33.94 33.942s-15.198 33.95-33.94 33.95v-.01z"/>
	  	</svg>
	  	<div class="copyright">
		    Toronto Outdoor Picture Show Inc.
	  	</div> <!-- /.copyright -->
	  </div>
	</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.0/TweenMax.min.js"></script>	
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>


<!-- Slick Carousel - start -->
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script>
	$(".carousel").slick({
		autoplay: true,
		fade: true,
		dots: false,
		cssEase: 'linear',
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		arrows: false,
		centerMode: true
		
	});
</script>
<!-- Slick Carousel - end -->


<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>