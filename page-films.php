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
		
		<section class="films">
			<?php
				$onePageQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'post_type' => 'film',
						'order' => 'DSC'
					)
				);
			?>
			<!-- start loop -->
			<?php if ( $onePageQuery->have_posts() ) : ?>
				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					<div class="film">
						<section class="visible">
							<div class="date">
								<?php if( get_field('date')):?>
									<h4><?php the_field( 'date' ); ?> @ sunset</h4>
								<?php endif; ?>
							</div> <!-- /.date -->
							
							<div class="feature">
								<?php if( get_field('feature_film')):?>
									<p>feature film</p>
									<h3><?php the_field( 'feature_film' ); ?></h3>
								<?php endif; ?>
							</div> <!-- /.feature -->

							<div class="shorts">
								<!-- start loop -->
									
								<?php if( have_rows('short_films') ): ?>
									<p>short film(s)</p>
									<?php while( have_rows('short_films') ): the_row();
										$short = get_sub_field('short_film');
									?>
										<h4><?php echo $short; ?></h4>
									<?php endwhile; ?>
								<?php endif; ?>
								
								<!-- end loop -->
							</div> <!-- /.shorts -->

							<div class="presenting-sponsors">
								<?php if( get_field('presenting_sponsor')):?>
									<?php $presentingsponsor = get_field('presenting_sponsor'); ?>
									<p>presenting sponsor</p>
									<img src="<?php echo $presentingsponsor['sizes']['medium']; ?>">
								<?php endif; ?>
							</div> <!-- /.presenting-sponsors -->
						</section> <!-- /.visible -->

						<section class="hidden">
							<div class="co-presenting-sponsors">
								<?php if( have_rows('co-presenting_sponsors') ): ?>
									<p>co-presenting sponsor(s)</p>
									<?php while( have_rows('co-presenting_sponsors') ): the_row();
										$copresenter = get_sub_field('co-presenting_sponsor'); 
									?>
										<img src="<?php echo $copresenter['sizes']['medium'] ?>">
									<?php endwhile; ?>
								<?php endif; ?>
							</div> <!-- /.co-presenting-sponsors -->

							<div class="food vendors">
								
								<?php if( have_rows('food_vendors') ): ?>
									<p>food vendor(s)</p>
									<?php while( have_rows('food_vendors') ): the_row();
										$food = get_sub_field('food_vendor'); 
									?>
										<img src="<?php echo $food['sizes']['medium'] ?>">
									<?php endwhile; ?>
								<?php endif; ?>
								
							</div> <!-- /.food vendors -->

							<div class="trailer">
								<?php if( get_field('trailer')):?>
									<?php the_field( 'trailer' ); ?>
								<?php endif; ?>
							</div> <!-- /.trailer -->
						</section> <!-- /.hidden -->
						
						<div class="facebook-event">
							<?php if( get_field('facebook_rsvp')):?>
								<a href="<?php the_field('facebook_rsvp'); ?>" target="_blank"><h4><i class="fa fa-facebook-official"></i> event page</h4></a>
							<?php endif; ?>
						</div> <!-- /.facebook-event -->
					</div> <!-- /.film -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
			<?php endif; ?>
			<!-- end loop -->
		</section> <!-- /.film -->
	</div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end