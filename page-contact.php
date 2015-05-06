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
		
		
		<!-- page title - start -->
		<h2><?php the_title(); ?></h2>
		<!-- page title - end -->
		
		<p>All screenings will take place at Christie Pits Park, unless otherwise noted:</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2886.219979504996!2d-79.41932647221373!3d43.66439460164457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b348b9fc8fff1%3A0x70a99ed8ba8aaf44!2sChristie+Pits+Park!5e0!3m2!1sen!2sca!4v1430713979383" width="600" height="450" frameborder="0" style="border:0"></iframe>
		
		<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'about',
					'order' => 'DSC'
				)
			);
		?>
		 <!-- start loop -->
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		<!-- end loop -->
	</div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end