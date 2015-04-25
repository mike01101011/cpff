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
						<div class="container">

						<div class="date">
							<?php if( get_field('date')):?>
								<h4><?php the_field( 'date' ); ?></h4>
							<?php endif; ?>
						</div> <!-- /.date -->
						
						<div class="feature clearfix">
							<?php if( get_field('feature_film')):?>
								<h3><?php the_field( 'feature_film' ); ?></h3>
							<?php endif; ?>
						</div> <!-- /.feature -->

						<!-- start loop -->
						<?php if( have_rows('short_films') ): ?>
							<div class="shorts clearfix">
								<p>screening with:</p>
								<?php while( have_rows('short_films') ): the_row();
									$short = get_sub_field('short_film');
								?>
									<?php if( get_field('short_film_row')):?>
										<div class="<?php the_field( 'short_film_row' ); ?> short-film ">
											<h3><?php echo $short; ?></h3>
										</div> <!-- /.short-film -->
									<?php endif; ?>
								<?php endwhile; ?>
							</div> <!-- /.shorts -->
						<?php endif; ?>
						<!-- end loop -->

						<!-- start loop -->
						<?php if( have_rows('presenting_sponsors') ): ?>
							<div class="presenting-sponsors clearfix">
								<p>presenting sponsor</p>
								<?php while( have_rows('presenting_sponsors') ): the_row();
									$presenterlink = get_sub_field('presenter_link');
									$presenter = get_sub_field('presenter_logo'); 
								?>
									<div class="presenter-logo">
										<a href="<?php echo $presenterlink ?>" target="_blank"><img src="<?php echo $presenter['sizes']['medium'] ?>" alt="<?php echo $presenter['alt'] ?>"></a>
									</div> <!-- /.presenter-logo -->
								<?php endwhile; ?>
							</div> <!-- /.presenting-sponsors -->
						<?php endif; ?>
						<!-- end loop -->
					
						<!-- start loop -->
						<?php if( have_rows('co-presenting_sponsors') ): ?>
							<div class="co-presenting-sponsors clearfix">
								<p>co-presented with</p>
								<?php while( have_rows('co-presenting_sponsors') ): the_row();
									$copresenterlink = get_sub_field('co-presenting_sponsor_link');
									$copresenter = get_sub_field('co-presenting_sponsor'); 
								?>
									<?php if( get_field('co-presenter_row')):?>
										<div class="co-presenter-logo <?php the_field( 'co-presenter_row' ); ?>">
											<a href="<?php echo $copresenterlink ?>" target="_blank"><img src="<?php echo $copresenter['sizes']['thumbnail'] ?>" alt="<?php echo $copresenter['alt'] ?>"></a>
										</div> <!-- /.co-presenter-logo -->
									<?php endif; ?>
								<?php endwhile; ?>
							</div> <!-- /.co-presenting-sponsors -->
						<?php endif; ?>
						<!-- end loop -->

						<!-- start loop -->
						<?php if( have_rows('food_vendors') ): ?>
							<div class="food-vendors clearfix">
								<p>food vendors</p>
								<?php while( have_rows('food_vendors') ): the_row();
									$foodlink = get_sub_field('food_vendor_link');
									$food = get_sub_field('food_vendor'); 
								?>
									<?php if( get_field('food_vendor_row')):?>
										<div class="food-vendor-logo <?php the_field( 'food_vendor_row' ); ?>">
											<a href="<?php echo $foodlink ?>" target="_blank"><img src="<?php echo $food['sizes']['thumbnail'] ?>" alt="<?php echo $food['alt'] ?>"></a>
										</div> <!-- /.food-vendor-logo -->
									<?php endif; ?>
								<?php endwhile; ?>
							</div> <!-- /.food vendors -->
						<?php endif; ?>
						<!-- end loop -->

						<div class="trailer clearfix">
							<!-- start loop -->
							<?php if( get_field('trailer')):?>
								<?php the_field( 'trailer' ); ?>
							<?php endif; ?>
							<!-- end loop -->
						</div> <!-- /.trailer -->
						

						<div class="facebook-event">
							<!-- start loop -->	
							<?php if( get_field('facebook_rsvp')):?>
								<a href="<?php the_field('facebook_rsvp'); ?>" target="_blank"><i class="fa fa-facebook-official "></i> event page</a>
							<?php endif; ?>
							<!-- end loop -->
						</div> <!-- /.facebook-event -->
						</div> <!-- /.container -->
					</div> <!-- /.film -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
			<?php endif; ?>
			<!-- end loop -->
		
		</section> <!-- /.film -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end