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
		
		<!-- /.sponsor - start -->
		<section class="sponsor">
			<?php
				$onePageQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'post_type' => 'sponsor',
						'order' => 'DSC'
					)
				);
			?>
			 <!-- start loop -->
			<?php if ( $onePageQuery->have_posts() ) : ?>
				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					<h2>Sponsors</h2>

					<!-- .title-sponsor - start -->
					<section class="title-sponsor">
						<?php if( have_rows('title') ): ?>
							<h3>title sponsor</h3>
							<?php while( have_rows('title') ): the_row();
								$titleimage = get_sub_field('title_sponsor_image');
								$titlelink = get_sub_field('title_sponsor_link');
							?>
								<a href="<?php echo $titlelink; ?>" target="_blank"><img src="<?php echo $titleimage['sizes']['medium'] ?>" alt="<?php echo $titleimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<!-- .title-sponsor - end -->
					

					<!-- .presenting-sponsor - start -->
					<section class="presenting-sponsor">
						<?php if( have_rows('presenting') ): ?>
							<h3>presenting sponsor</h3>
							<?php while( have_rows('presenting') ): the_row();
								$presentingimage = get_sub_field('presenting_sponsor_image');
								$presentinglink = get_sub_field('presenting_sponsor_link');
							?>
								<a href="<?php echo $presentinglink; ?>" target="_blank"><img src="<?php echo $presentingimage['sizes']['medium'] ?>" alt="<?php echo $presentingimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<!-- .presenting-sponsor - end -->
					

					<!-- .event-supporters - start -->
					<section class="event-supporters">
						<?php if( have_rows('supporter') ): ?>
							<h3>event supporter</h3>
							<?php while( have_rows('supporter') ): the_row();
								$supporterimage = get_sub_field('supporter_image');
								$supporterlink = get_sub_field('supporter_link');
							?>
								<a href="<?php echo $supporterlink; ?>" target="_blank"><img src="<?php echo $supporterimage['sizes']['medium'] ?>" alt="<?php echo $supporterimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<!-- .event-supporters - end -->
					

					<!-- .friends-festival - start -->
					<section class="friends-festival">
						<?php if( have_rows('friends') ): ?>
							<h3>friends of the festival</h3>
							<?php while( have_rows('friends') ): the_row();
								$friendimage = get_sub_field('friend_image');
								$friendlink = get_sub_field('friend_link');
							?>
								<a href="<?php echo $friendlink; ?>" target="_blank"><img src="<?php echo $friendimage['sizes']['medium'] ?>" alt="<?php echo $friendimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<!-- .friends-festival - end -->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
			<?php endif; ?>
			<!-- end loop -->
		</section>
		<!-- /.sponsor - end -->

		
		<!-- .partner - start -->
		<section class="partner">
			<?php
				$onePageQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'post_type' => 'partner',
						'order' => 'DSC'
					)
				);
			?>

			<!-- start loop -->
			<?php if ( $onePageQuery->have_posts() ) : ?>
				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					<h2>Partners</h2>

					<!-- .government-partners - start -->
					<section class="government-partners">
						<?php if( have_rows('government_partners') ): ?>
							<?php while( have_rows('government_partners') ): the_row();
								$governmentacknowledgement = get_sub_field('government_message');
								$governmentimage = get_sub_field('government_image');
								$governmentlink = get_sub_field('government_link');
							?>
								<p><?php echo $governmentacknowledgement; ?></p>
								<a href="<?php echo $governmentlink; ?>" target="_blank"><img src="<?php echo $governmentimage['sizes']['medium'] ?>" alt="<?php echo $governmentimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<!-- .government-partners - end -->


					<div class="message">
						<?php if( get_field('partners_message')):?>
							<p><?php the_field( 'partners_message' ); ?></p>
						<?php endif; ?>
					</div> <!-- .message -->


					<!-- .general-partners - start -->
					<section class="general-partners">

						<!-- top tier partners - start -->
						<?php if( have_rows('top_tier_partners') ): ?>
							<?php while( have_rows('top_tier_partners') ): the_row();
								$toptierimage = get_sub_field('top_tier_image');
								$toptierlink = get_sub_field('top_tier_link');
							?>
								<a href="<?php echo $toptierlink; ?>" target="_blank"><img src="<?php echo $toptierimage['sizes']['medium'] ?>" alt="<?php echo $toptierimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
						<!-- top tier partners - end -->
						
						<!-- medium tier partners - start -->
						<?php if( have_rows('medium_tier_partners') ): ?>
							<?php while( have_rows('medium_tier_partners') ): the_row();
								$mediumtierimage = get_sub_field('medium_tier_image');
								$mediumtierlink = get_sub_field('medium_tier_link');
							?>
								<a href="<?php echo $mediumtierlink; ?>" target="_blank"><img src="<?php echo $mediumtierimage['sizes']['medium'] ?>" alt="<?php echo $mediumtierimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
						<!-- medium tier partners - end -->

						<!-- bottom tier partners - start -->
						<?php if( have_rows('bottom_tier_partners') ): ?>
							<?php while( have_rows('bottom_tier_partners') ): the_row();
								$bottomtierimage = get_sub_field('bottom_tier_image');
								$bottomtierlink = get_sub_field('bottom_tier_link');
							?>
								<a href="<?php echo $bottomtierlink; ?>" target="_blank"><img src="<?php echo $bottomtierimage['sizes']['medium'] ?>" alt="<?php echo $bottomtierimage['alt'] ?>"></a>
							<?php endwhile; ?>
						<?php endif; ?>
						<!-- bottom tier partners - end -->

					</section>
					<!-- .general-partners - end -->

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
			<?php endif; ?>
		</section>
		<!-- .partner - end -->
	</div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end