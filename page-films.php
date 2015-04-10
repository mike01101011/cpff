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
		
		<section class="film">
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
					<section class="visible">
						<div class="date">
							<h4><?php the_field( 'date' ); ?> @ sunset</h4>
						</div> <!-- /.date -->
						
						<div class="feature">
							<p>feature film</p>
							<h3><?php the_field( 'feature_film' ); ?></h3>
						</div> <!-- /.feature -->

						<div class="shorts">
							<!-- start loop -->
							<?php while ( has_sub_field('short_films') ): ?>
								<p>short film(s)</p>
								<h4><?php the_sub_field('short_film'); ?></h4>
							<?php endwhile; ?>
							<!-- end loop -->
						</div> <!-- /.shorts -->

						<div class="presenting-sponsors">
							<?php $presentingsponsor = get_field('presenting_sponsor'); ?>
							<p>presenting sponsor</p>
							<img src="<?php echo $presentingsponsor['sizes']['medium']; ?>">
						</div> <!-- /.presenting-sponsors -->
					</section> <!-- /.visible -->

					<section class="hidden">
						<div class="co-presenting-sponsors">
							<?php while ( has_sub_field('co-presenting_sponsors') ): ?>
								<p>co-presenting sponsor(s)</p>
								<?php $copresenter = get_sub_field('co-presenting_sponsor'); ?>
								<img src="<?php echo $copresenter['sizes']['medium'] ?>">
							<?php endwhile; ?>
						</div> <!-- /.co-presenting-sponsors -->

						<div class="co-presenting-sponsors">
							<?php while ( has_sub_field('food_vendors') ): ?>
								<p>food vendor(s)</p>
								<?php $foodvendor = get_sub_field('food_vendor'); ?>
								<img src="<?php echo $foodvendor['sizes']['medium'] ?>">
							<?php endwhile; ?>
						</div> <!-- /.co-presenting-sponsors -->

						<div class="trailer">
							<?php the_field( 'trailer' ); ?>
						</div> <!-- /.trailer -->
					</section> <!-- /.hidden -->
					
					<div class="facebook-event">
						<a href="<?php the_field('facebook_rsvp'); ?>" target="_blank"><h4><i class="fa fa-facebook-official"></i> event page</h4></a>
					</div> <!-- /.facebook-event -->
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