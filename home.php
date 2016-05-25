<?php // home.php blog posts listing, uses loop-blog.php ?>

<!-- Blog Post Page -->

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
	<div class="container">
		<section class="blog-posts-listing">
			<div class="content">
				<div class="blog-posts-listing-title">
					<h2>Blog Posts</h2>
				</div> <!-- .blog-title -->
				<?php get_template_part( 'loop', 'blog' );	?>
			</div> <!--/.content -->
		</section> <!-- .blog-posts-listing -->
    	<?php get_sidebar(); ?>
    </div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end