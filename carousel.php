<section class="carousel">
	<?php
		$onePageQuery = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'carousel-image',
				'order' => 'DSC'
			)
		);
	?>
	
	<?php if ( $onePageQuery->have_posts() ) : ?>
		<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
			<?php if( have_rows('carousel') ): ?>
				<?php while( have_rows('carousel') ): the_row();
				$images = get_sub_field('image')?>
					<div><img src="<?php echo $images['sizes']['carousel'] ?>" alt="<?php echo $images['alt'] ?>"></div>
				<?php endwhile; ?>
			<?php endif; ?>

	
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else: ?>
	<?php endif; ?>
</section> <!-- .carousel -->