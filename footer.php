	<footer>
	  <div class="container">
	    <p>&copy; Christie Pits Film Festival <?php echo date('Y'); ?></p>
	  </div>
	</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>


<!-- Slick Carousel - start -->
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script>
	$(".carousel").slick({
		autoplay: true,
		fade: true,
		dots: false,
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