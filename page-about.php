<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<!-- carousel - start -->
	<? include("carousel.php"); ?>
<!-- carousel - end -->

	<div class="container">

		<div class="content clearfix">
			<h2><?php echo get_the_title( $ID ); ?></h2>
		</div> <!--/.content -->
	</div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>