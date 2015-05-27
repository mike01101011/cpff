<!-- website header - start -->
<?php get_header(); ?>
<!-- website header - end -->


<!-- website navigation - start -->
<?php include("navigation.php"); ?>
<!-- website navigation - end -->


<!-- carousel - start -->
<? include("carousel.php"); ?>
<!-- carousel - end -->


<!-- website main content - start -->
<main class="clearfix">
	<!-- page title - start -->
	<h2><?php the_title(); ?></h2>
	<!-- page title - end -->
	
	<section class="donation">
		<div class="container">
			<?php the_content(); ?>
		</div> <!-- /.container -->
	</section> <!-- /.donation -->

</main> <!-- /.clearfix -->
<!-- website main content - end -->



<!-- website footer - start -->
<?php wp_footer(); ?>
<?php get_footer(); ?>
<!-- website footer - end