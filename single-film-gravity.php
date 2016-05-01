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
		<a href=" http://localhost:8888/cpff/films/">Films</a>
	</div>
	<div class="container">
		<div class="title-headline">
			<!-- page title - start -->
			<!-- <h2><?php the_title(); ?></h2> -->
			<!-- page title - end -->
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
<!-- 			<?php the_content(); ?> -->
		</div>  <!-- /.title-headline -->			
	</div> <!-- .container -->

		

<div class="flex">
			<!-- start loop -->
			<?php if ( $onePageQuery->have_posts() ) : ?>
				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
					<section class="film films" id="<?php echo str_replace(str_split(' ,?\\/:*?"<>|~`'), '', get_field( 'feature_film' )); ?>">
						<div class="container">
<!-- xx01 TITLE TEXT -->
							<?php if( get_field('title')):?> <!-- start loop -->
								<div class="feature clearfix">
									<h3><?php the_field( 'title' ); ?></h3>
								</div> <!-- /.feature -->
							<?php endif; ?> <!-- end loop -->
<!-- 02 DATE WYSIWYG -->
							<?php if( get_field('date')):?> <!-- start loop -->
								<div class="date">
									<h4><?php the_field( 'date' ); ?></h4>
								</div> <!-- /.date -->
							<?php endif; ?> <!-- end loop -->

<!-- xx03 HEADLINE TEXT -->
							<?php if( get_field('headline') ): ?> <!-- start loop -->
								<div class="shorts clearfix">
									<div class="short-films">
										<div class="short-film ">
											<h3><?php the_field( 'headline' ); ?></h3>
										</div> <!-- /.short-film -->
									</div> <!-- /.short-films -->
								</div> <!-- /.shorts -->
							<?php endif; ?> <!-- end loop -->
<!-- xx04 OVERVIEW TEXT -->
							<?php if( get_field('overview') ): ?> <!-- start loop -->
								<div class="shorts clearfix">
									<p><?php the_field('overview'); ?></p>
									<!-- <div class="short-films"> -->
												<!-- <div class="short-film "> -->
													<!-- <h4><?php the_field('overview'); ?></h4> -->
												<!-- </div> /.short-film	 -->
									<!-- </div> /.short-films -->
								</div> <!-- /.shorts -->
							<?php endif; ?> <!-- end loop -->

<!-- 05 POSTER IMAGE -->
							<?php if( get_field('poster')):?> <!-- start loop -->
								<div class="poster clearfix">
									<?php $image = get_field('poster'); if( !empty($image) ): ?>
<!-- TO PRINT ARRAY -->
<!-- <pre><?php print_r($image);?></pre> -->
										<img src="<?php echo $image['sizes']['films-page']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
								</div> <!-- /.poster -->
							<?php endif; ?> <!-- end loop -->
<!-- 06 FEATURE FILM TEXT -->						
							<?php if( get_field('feature_film')):?> <!-- start loop -->
								<div class="feature clearfix">
									<h3><?php the_field( 'feature_film' ); ?></h3>
<!-- XX FEATURE DIRECTOR TEXT -->
									<!-- <h4>Directed by:</h4> -->
									<!-- <h4 class="director_name"><?php the_field( 'feature_director' ); ?></h4> -->
								</div> <!-- /.feature -->
							<?php endif; ?> <!-- end loop -->
<!-- 07 SHORT FILMS REPEATER -->
							<?php if( have_rows('short_films') ): ?> <!-- start loop -->

								<div class="shorts clearfix">
									<p>screening with:</p>
									<div class="short-films">
										<?php while( have_rows('short_films') ): the_row();
											$short = get_sub_field('short_film');
											$filmmaker = get_sub_field('short_director');
											$twitter = get_sub_field('twitter_handle');
										?>						
												<div class="short-film ">
													<h3><?php echo $short; ?></h3>
													<h4>Directed by:</h4>
													<h4 class="director_name"><a href="<?php echo $twitter; ?>" target="_blank"><?php echo $filmmaker; ?></a></h4>
												</div> <!-- /.short-film -->	
										<?php endwhile; ?>
									</div> <!-- /.short-films -->
								</div> <!-- /.shorts -->
							<?php endif; ?> <!-- end loop -->
<!-- 08 FOOD VENDORS REPEATER -->
							<?php if( have_rows('food_vendors') ): ?> <!-- start loop -->
								<div class="food-vendors clearfix">
									<p>food vendors</p>
									<div class="food-vendor">
										<?php while( have_rows('food_vendors') ): the_row();
											$foodlink = get_sub_field('food_vendor_link');
											$food = get_sub_field('food_vendor'); 
										?>
											<div class="food-vendor-logo">
												<a href="<?php echo $foodlink ?>" target="_blank"><img src="<?php echo $food['sizes']['food-vendor'] ?>" alt="<?php echo $food['alt'] ?>"></a>
											</div> <!-- /.food-vendor-logo -->	
										<?php endwhile; ?>
									</div> <!-- /.food-vendor -->
								</div> <!-- /.food vendors -->
							<?php endif; ?> <!-- end loop -->
<!-- 09 PRESENTING SPONSORS REPEATER -->
							<?php if( have_rows('presenting_sponsors') ): ?> <!-- start loop -->
								<div class="presenting-sponsors clearfix">
									<p>Presenting Sponsor</p>
									<?php while( have_rows('presenting_sponsors') ): the_row();
										$presenterlink = get_sub_field('presenter_link');
										$presenter = get_sub_field('presenter_logo'); 
									?>
										<div class="presenter-logo">
											<a href="<?php echo $presenterlink ?>" target="_blank"><img src="<?php echo $presenter['sizes']['presenting-sponsor-logo'] ?>" alt="<?php echo $presenter['alt'] ?>"></a>
										</div> <!-- /.presenter-logo -->
									<?php endwhile; ?>
								</div> <!-- /.presenting-sponsors -->
							<?php endif; ?> <!-- end loop -->
<!-- 10 CO-PRESENTING SPONSORS REPEATER -->
							<?php if( have_rows('co-presenting_sponsors') ): ?> <!-- start loop -->
								<div class="co-presenters clearfix">
									<p>co-presented with</p>
									<div class="co-presenter">
										<?php while( have_rows('co-presenting_sponsors') ): the_row();
											$copresenterlink = get_sub_field('co-presenting_sponsor_link');
											$copresenter = get_sub_field('co-presenting_sponsor'); 
										?>
											<div class="co-presenter-logo">
												<a href="<?php echo $copresenterlink ?>" target="_blank"><img class="logo" src="<?php echo $copresenter['sizes']['copresenter-logo'] ?>" alt="<?php echo $copresenter['alt'] ?>"></a>
											</div> <!-- /.co-presenter-logo -->
										<?php endwhile; ?>
									</div> <!-- /.co-presenter -->
								</div> <!-- /.co-presenters -->
							<?php endif; ?> <!-- end loop -->
<!-- 11 SUPPORTING SPONSORS REPEATER -->
							<?php if( have_rows('supporting_sponsors') ): ?> <!-- start loop -->
								<div class="co-presenters clearfix">
									<p>supported by</p>
									<div class="co-presenter">
										<?php while( have_rows('supporting_sponsors') ): the_row();
											$supporterlink = get_sub_field('supporting_sponsor_link');
											$supporter = get_sub_field('supporting_sponsor'); 
										?>
											<div class="co-presenter-logo">
												<a href="<?php echo $supporterlink ?>" target="_blank"><img class="logo" src="<?php echo $supporter['sizes']['copresenter-logo'] ?>" alt="<?php echo $supporter['alt'] ?>"></a>
											</div> <!-- /.co-presenter-logo -->
										<?php endwhile; ?>
									</div> <!-- /.co-presenter -->
								</div> <!-- /.co-presenters -->
							<?php endif; ?> <!-- end loop -->
<!-- 12 TRAILER TEXT -->
							<?php if( get_field('trailer')):?> <!-- start loop -->
								<div class="trailer clearfix">
									<?php the_field( 'trailer' ); ?>
								</div> <!-- /.trailer -->
							<?php endif; ?> <!-- end loop -->
<!-- 13 FACEBOOK RSVP TEXT -->
							<?php if( get_field('facebook_rsvp')):?> <!-- start loop -->	
								<div class="facebook-event">
									<a href="<?php the_field('facebook_rsvp'); ?>" target="_blank"><i class="fa fa-facebook-official "></i> event page</a>
								</div> <!-- /.facebook-event -->
							<?php endif; ?> <!-- end loop -->


<!-- NOT USED NOT USED NOT USED NOT USED NOT USED NOT USED NOT USED NOT USED NOT USED NOT USED NOT USED -->

<!-- XX EVENT INFO WYSIWYG -->
							<?php if( get_field('event_info')):?> <!-- start loop -->
								<div class="event-info clearfix">
									<?php the_field( 'event_info' ); ?>
								</div> <!-- /.event-info -->
							<?php endif; ?> <!-- end loop -->

<!-- XX MUSIC WYSIWYG -->
							<?php if( get_field('live_music')):?> <!-- start loop -->
								<div class="live-music clearfix">
									<?php the_field( 'live_music' ); ?>
								</div> <!-- /.live-music -->
							<?php endif; ?> <!-- end loop -->

<!-- XX NOTES WYSIWYG -->
							<?php if( get_field('notes')):?> <!-- start loop -->	
								<div class="additional-notes">
									<?php the_field('notes'); ?>
								</div> <!-- /.additional-notes -->
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