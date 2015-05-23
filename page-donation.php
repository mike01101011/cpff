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
	<!-- <div class="container"> -->
	<div class="container">
		<!-- page title - start -->
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<!-- page title - end -->
	</div> <!-- /.container -->
		

		
		<!-- end loop -->
	<!-- </div> --> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end