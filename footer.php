	<footer>
	  <div class="container">
	    <p>&copy; Christie Pits Film Festival <?php echo date('Y'); ?></p>
	  </div>
	</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

<!-- Owl Carousel - start -->
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>

<script>
	$(".owl-carousel").owlCarousel({
		navigation : false, // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem:true,
		      autoPlay: 5000,
		      paginationSpeed: 1000,
		      pagination: false
	});
</script>
<!-- Owl Carousel - end -->


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