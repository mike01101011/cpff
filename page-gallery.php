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
		
		
		<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'gallery',
					'order' => 'DSC'
				)
			);
		?>
	
		<div class="slider-for">
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
				<?php if( have_rows('designs') ): ?>
					<?php while( have_rows('designs') ): the_row();
					$images = get_sub_field('design')?>
							<div><img src="<?php echo $images['sizes']['medium'] ?>" alt="<?php echo $images['alt'] ?>"></div>
							
						
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		</div>

		<div class="slider-nav">
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
				<?php if( have_rows('designs') ): ?>
					<?php while( have_rows('designs') ): the_row();
					$images = get_sub_field('design')?>
							<div><img src="<?php echo $images['sizes']['thumbnail'] ?>" alt="<?php echo $images['alt'] ?>"></div>

						
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		</div>

	</div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end