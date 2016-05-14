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
<main class="clearfix sponsors-partners">
	
		
	
		<!-- page title - start -->
		<div class="container bottom-border">
			<h2>Thank you to all of our <?php the_title(); ?></h2>
		</div>
		<!-- page title - end -->
		
		
		<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'support-partner',
					'order' => 'DSC'
				)
			);
		?>
		 <!-- start loop -->
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
				<section class="level">
					<div class="container bottom-border">
						<?php if( get_field('type')):?>
		                    <h3><?php the_field( 'type' ); ?></h3>
						<?php endif; ?>

						<?php if( have_rows('large') ): ?>
							<div class="big-donors clearfix">
								<?php while( have_rows('large')): the_row();
									$largeimage = get_sub_field('large_image');
									$largelink = get_sub_field('large_link');
								?>
									<div class="big-donor">
										<a href="<?php echo $largelink; ?>" target="_blank"><img src="<?php echo $largeimage['sizes']['large'] ?>" alt="<?php echo $largeimage['alt'] ?>"></a>
									</div> <!-- /.big-donor -->
								<?php endwhile; ?>
							</div> <!-- /.big-donors clearfix -->
						<?php endif; ?>


						<?php if( have_rows('second_tier') ): ?>
							<div class="second-tier-donors clearfix">
								<?php while( have_rows('second_tier')): the_row();
									$stimage = get_sub_field('second_tier_image');
									$stlink = get_sub_field('second_tier_link');
								?>
									<div class="second-tier-donor">
										<a href="<?php echo $stlink; ?>" target="_blank"><img src="<?php echo $stimage['sizes']['copresenter-logo'] ?>" alt="<?php echo $stimage['alt'] ?>"></a>
									</div> <!-- /.big-donor -->
								<?php endwhile; ?>
							</div> <!-- /.big-donors clearfix -->
						<?php endif; ?>
	                    

						<?php if( have_rows('medium') ): ?>
							<div class="medium-donors clearfix">
								<?php while( have_rows('medium')): the_row();
									$mediumimage = get_sub_field('medium_image');
									$mediumlink = get_sub_field('medium_link');
								?>
									<div class="medium-donor">
										<a href="<?php echo $mediumlink; ?>" target="_blank"><img src="<?php echo $mediumimage['sizes']['medium'] ?>" alt="<?php echo $mediumimage['alt'] ?>"></a>
									</div> <!-- /.big-donor -->
								<?php endwhile; ?>
							</div> <!-- /.big-donors clearfix -->
						<?php endif; ?>

						<?php if( have_rows('small') ): ?>
							<div class="small-donors clearfix">
								<?php while( have_rows('small')): the_row();
									$smallimage = get_sub_field('small_image');
									$smalllink = get_sub_field('small_link');
								?>
									<div class="small-donor">
										<a href="<?php echo $smalllink; ?>" target="_blank"><img src="<?php echo $smallimage['sizes']['small-logo'] ?>" alt="<?php echo $smallimage['alt'] ?>"></a>
									</div> <!-- /.big-donor -->
								<?php endwhile; ?>
							</div> <!-- /.big-donors clearfix -->
						<?php endif; ?>

	                </div> <!-- /.container -->
				</section><!-- /.level -->
					
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		<!-- end loop -->
	
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end