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
		<div class="title-headline">
			<!-- page title - start -->
			<h2><?php the_title(); ?></h2>
			<!-- page title - end -->
			<?php
				$onePageQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
// SET POST TYPE
						'post_type' => 'event',
						'name' => 'nosferatu',
						'order' => 'DSC'
					)
				);
/*
<pre><?php print_r($onePageQuery->posts); ?></pre>
*/
			?>
			<ul class="menu_dates">
				<?php if ( $onePageQuery->have_posts() ) : ?>
					<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
						<li class="menu_date"><a href = "./#<?php echo str_replace(str_split(' ,?\\/:*?"<>|~`'), '', get_field( 'feature_film' )); ?>"><?php the_field( 'feature_film' ); ?></a></li>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php else: ?>
				<?php endif; ?>
			</ul>
			<?php the_content(); ?>
		</div>  <!-- /.title-headline -->			
	</div> <!-- .container -->

<!-- CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT CONTENT -->
		
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end