<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- large background - start -->
	<section class="lrg-bg">
		
	</section><!-- /.lrg-bg -->
<!-- large background - end -->

	<div class="container">

		<div class="content clearfix">
				<?php get_template_part( 'loop', 'index' );	?>
		</div> <!--/.content -->

	</div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>