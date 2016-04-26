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
		<!-- <div class="title-headline"> -->
			<p>All screenings at Christie Pits Park</p>
			<p>PWYC with suggested donation of $10</p>
			<p>Screenings begin at sunset</p>
		<!-- </div> .title-headline -->
	</div> <!-- .container -->

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
						'post_type' => 'film',
						'order' => 'DSC'
					)
				);
			?>

<!-- PRINT PRINT PRINT -->
<!-- <pre><?php print_r($onePageQuery->posts); ?></pre> -->

			<?php the_content(); ?>
		</div>  <!-- /.title-headline -->			
	</div> <!-- .container -->

<div class="flex">
			<!-- start loop -->
			<?php if ( $onePageQuery->have_posts() ) : ?>
				<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
					<section class="film" id="<?php echo str_replace(str_split(' ,?\\/:*?"<>|~`'), '', get_field( 'feature_film' )); ?>">
						<div class="container">

<!-- POSTER -->
							<?php if( get_field('poster')):?> <!-- start loop -->
								<div class="poster clearfix">
									<?php $image = get_field('poster'); if( !empty($image) ): ?>
<!-- TO PRINT ARRAY -->
<!-- <pre><?php print_r($image);?></pre> -->
										<img src="<?php echo $image['sizes']['films-page']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
								</div> <!-- /.poster -->
							<?php endif; ?> <!-- end loop -->
<!-- FEATURE -->
							<?php if( get_field('feature_film')):?> <!-- start loop -->
								<div class="feature clearfix">
									<a href="<?php the_permalink(); ?>"><h3><?php the_field( 'feature_film' ); ?></h3></a>
								</div> <!-- /.feature -->
							<?php endif; ?> <!-- end loop -->
<!-- SHORT -->
							<?php if( have_rows('short_films') ): ?> <!-- start loop -->
								<div class="shorts clearfix">
									<div class="short-films">
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
<!-- DATE -->
							<?php if( get_field('date')):?> <!-- start loop -->
								<div class="date">
									<h4><?php the_field( 'date' ); ?></h4>
								</div> <!-- /.date -->
							<?php endif; ?> <!-- end loop -->

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