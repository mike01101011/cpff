<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- carousel - start -->
	<? include("carousel.php"); ?>
<!-- carousel - end -->

	<div class="container">

		<div class="content clearfix">
				<?php get_template_part( 'loop', 'index' );	?>
		</div> <!--/.content -->

		<!-- sidebar - start -->
		    <?php /*get_sidebar(); */?>
		<!-- sidebar - end -->

	</div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>