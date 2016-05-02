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
		<div class="films-page-link">
			<a href=" http://localhost:8888/cpff/films/">Films</a>
		</div> <!-- .container -->
	</div>
	<?php 
		$onePageQuery = new WP_Query( 
			array(
				'posts_per_page' => -1,
	// SET POST TYPE
				'post_type' => 'event',
				'name' => 'gravity',
				'order' => 'DSC'
			)
		);
	?>

<div class="flex">
			<!-- start loop -->
			<?php if ( $onePageQuery->have_posts() ) : ?>
				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
					<section class="film" id="<?php echo str_replace(str_split(' ,?\\/:*?"<>|~`'), '', get_field( 'feature_film' )); ?>">
						<div class="container">

<!-- xx01 TITLE TEXT -->
							<?php if( get_field('title')):?> <!-- start loop -->
								<div class="feature event-title clearfix">
									<h3><?php the_field( 'title' ); ?></h3>
								</div> <!-- /.feature -->
							<?php endif; ?> <!-- end loop -->

<!-- 02 DATE WYSIWYG -->
							<?php if( get_field('date')):?> <!-- start loop -->
								<div class="date event-date">
									<h4><?php the_field( 'date' ); ?></h4>
								</div> <!-- /.date -->
							<?php endif; ?> <!-- end loop -->

<!-- xx03 HEADLINE TEXT -->
							<?php if( get_field('headline') ): ?> <!-- start loop -->
								<div class="shorts event-headline clearfix">
									<div class="short-films">
										<div class="short-film">
											<h3><?php the_field( 'headline' ); ?></h3>
										</div> <!-- /.short-film -->
									</div> <!-- /.short-films -->
								</div> <!-- /.shorts -->
							<?php endif; ?> <!-- end loop -->

<!-- xx04 OVERVIEW TEXT -->
							<?php if( get_field('overview') ): ?> <!-- start loop -->
								<div class="shorts event-overview clearfix">
									<p><?php the_field('overview'); ?></p>
								</div> <!-- /.shorts -->
							<?php endif; ?> <!-- end loop -->

<!-- 05 POSTER IMAGE -->
							<?php if( get_field('poster')):?> <!-- start loop -->
								<div class="poster event-poster clearfix">
									<?php $image = get_field('poster'); if( !empty($image) ): ?>
<!-- TO PRINT ARRAY -->
<!-- <pre><?php //print_r($image);?></pre> -->
										<img src="<?php echo $image['sizes']['films-page']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
									<div class="short event-poster-credit clearfix">
										<p>Design Credit: José Garcia of <a href="http://www.garciadesign.ca/" target="_blank">Garcia Design</a></p>
									</div>
								</div> <!-- /.poster -->
							<?php endif; ?> <!-- end loop -->

<!-- 06 FEATURE FILM TEXT -->						
							<?php if( get_field('feature_film')):?> <!-- start loop -->
								<div class="feature event-feature clearfix">
									<h3><?php the_field( 'feature_film' ); ?></h3>
								</div> <!-- /.feature -->
							<?php endif; ?> <!-- end loop -->

<!-- 07 SHORT FILMS REPEATER -->
							<?php if( have_rows('short_films') ): ?> <!-- start loop -->
								<div class="shorts event-shorts clearfix">
									<p>Screening with</p>
									<div class="short-films event-short">
										<?php while( have_rows('short_films') ): the_row();
											$short = get_sub_field('short_film');
											$filmmaker = get_sub_field('short_director');
											$twitter = get_sub_field('twitter_handle');
										?>						
												<div class="short-film ">
													<h3><?php echo $short; ?></h3>
												</div> <!-- /.short-film -->	
										<?php endwhile; ?>
									</div> <!-- /.short-films -->
								</div> <!-- /.shorts -->
							<?php endif; ?> <!-- end loop -->
<!-- DETAILS-2 -->
							<div class="details-1 clearfix">
								<p>Films @ Sundown</p>
								<p>Eats & Treats @ 6pm</p>
							</div>

<!-- 08 FOOD VENDORS REPEATER -->
							<?php if( have_rows('food_vendors') ): ?> <!-- start loop -->
								<div class="food-vendors event-food-vendors clearfix">
									<div class="food-vendor event-food-vendor">
										<?php while( have_rows('food_vendors') ): the_row();
											$foodlink = get_sub_field('food_vendor_link');
											$food = get_sub_field('food_vendor'); 
										?>
											<div class="food-vendor-logo event-food-vendor-logo">
												<a href="<?php echo $foodlink ?>" target="_blank"><img src="<?php echo $food['sizes']['food-vendor'] ?>" alt="<?php echo $food['alt'] ?>"></a>
											</div> <!-- /.food-vendor-logo -->	
										<?php endwhile; ?>
									</div> <!-- /.food-vendor -->
								</div> <!-- /.food vendors -->
							<?php endif; ?> <!-- end loop -->
<!-- DETAILS-2 -->
							<div class="details-2 clearfix">
								<p>Free / PWYC (suggested donation $10)</p>
								<p>BYOBlanket</p>
								<p>Accessible venue</p>
								<p>Films are screened with captioning whenever possible</p>
							</div>

<!-- 09 PRESENTING SPONSORS REPEATER -->
							<?php if( have_rows('presenting_sponsors') ): ?> <!-- start loop -->
								<div class="presenting-sponsors event-presenting-sponsors clearfix">
									<p>Opening Night Sponsor</p>
									<?php while( have_rows('presenting_sponsors') ): the_row();
										$presenterlink = get_sub_field('presenter_link');
										$presenter = get_sub_field('presenter_logo'); 
									?>
										<div class="presenter-logo event-presenter-logo">
											<a href="<?php echo $presenterlink ?>" target="_blank"><img src="<?php echo $presenter['sizes']['presenting-sponsor-logo'] ?>" alt="<?php echo $presenter['alt'] ?>"></a>
										</div> <!-- /.presenter-logo -->
									<?php endwhile; ?>
								</div> <!-- /.presenting-sponsors -->
							<?php endif; ?> <!-- end loop -->

<!-- 10 CO-PRESENTING SPONSORS REPEATER -->
							<?php if( have_rows('co-presenting_sponsors') ): ?> <!-- start loop -->
								<div class="co-presenters event-co-presenters clearfix">
									<p>Co-presented by</p>
									<div class="co-presenter event-co-presenter">
										<?php while( have_rows('co-presenting_sponsors') ): the_row();
											$copresenterlink = get_sub_field('co-presenting_sponsor_link');
											$copresenter = get_sub_field('co-presenting_sponsor'); 
										?>
											<div class="co-presenter-logo event-co-presenter-logo">
												<a href="<?php echo $copresenterlink ?>" target="_blank"><img class="logo" src="<?php echo $copresenter['sizes']['copresenter-logo'] ?>" alt="<?php echo $copresenter['alt'] ?>"></a>
											</div> <!-- /.co-presenter-logo -->
										<?php endwhile; ?>
									</div> <!-- /.co-presenter -->
								</div> <!-- /.co-presenters -->
							<?php endif; ?> <!-- end loop -->

<!-- 11 SUPPORTING SPONSORS REPEATER -->
							<?php if( have_rows('supporting_sponsors') ): ?> <!-- start loop -->
								<div class="co-presenters event-co-presenters clearfix">
									<p>Thank you to the Ontario Arts Council and Toronto Arts Council for their support of Christie Pits Film Festival.</p>
									<div class="co-presenter event-co-presenter">
										<?php while( have_rows('supporting_sponsors') ): the_row();
											$supporterlink = get_sub_field('supporting_sponsor_link');
											$supporter = get_sub_field('supporting_sponsor'); 
										?>
											<div class="co-presenter-logo event-co-presenter-logo supporter-logo">
												<a href="<?php echo $supporterlink ?>" target="_blank"><img class="logo" src="<?php echo $supporter['sizes']['copresenter-logo'] ?>" alt="<?php echo $supporter['alt'] ?>"></a>
											</div> <!-- /.co-presenter-logo -->
										<?php endwhile; ?>
									</div> <!-- /.co-presenter -->
								</div> <!-- /.co-presenters -->
							<?php endif; ?> <!-- end loop -->
<!-- 12 TRAILER TEXT -->
							<?php if( get_field('trailer')):?> <!-- start loop -->
								<div class="trailer event-trailer clearfix">
									<?php the_field( 'trailer' ); ?>
								</div> <!-- /.trailer -->
							<?php endif; ?> <!-- end loop -->
<!-- 13 FACEBOOK RSVP TEXT -->
							<?php if( get_field('facebook_rsvp')):?> <!-- start loop -->	
								<div class="facebook-event event-facebook-event">
									<a href="<?php the_field('facebook_rsvp'); ?>" target="_blank"><i class="fa fa-facebook-official "></i> event page</a>
								</div> <!-- /.facebook-event -->
							<?php endif; ?> <!-- end loop -->

<!-- <i class="fa fa-youtube-square fa-5x" title="YouTube" aria-hidden="true"></i>
<i class="fa fa-facebook-square fa-5x" title="Facebook" aria-hidden="true"></i> -->

						</div> <!-- /.container -->
					</section> <!-- /.film -->
				<?php endwhile; ?>

</div> <!-- /.flex -->
			
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
			<?php endif; ?>
			<!-- end loop -->
		
		
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end