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
		
		
		<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'gallery',
					'order' => 'DSC'
				)
			);
		?>
	
		
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
				<section id="design">
					<div class="container">
						<h3>Poster Gallery</h3>
						<div class="poster-images">
						<?php if( have_rows('poster_designs') ): ?>
							<?php while( have_rows('poster_designs') ): the_row();
							$images = get_sub_field('poster')?>
								<div>
									<img src="<?php echo $images['sizes']['medium'] ?>" alt="<?php echo $images['alt'] ?>">
									<h4><?php echo $images['title'] ?></h4>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						</div> <!-- /.poster-images -->
					</div> <!-- /.container -->
				</section> <!-- /.design -->
		
				<section id="photo">
					<div class="container">
						<h3>Photo Gallery</h3>
							<div class="galleries">
							<?php if( get_field( "picture_gallery_text" ) ): ?>
								<p><?php the_field( 'picture_gallery_text' ); ?></p>
							<?php endif; ?>
								<ul>
								<?php if( have_rows('picture_galleries') ): ?>
									<?php while( have_rows('picture_galleries') ): the_row();
									$gallery = get_sub_field('picture_gallery');
									$link = get_sub_field('gallery_link')?>
										<li><a href="<?php echo $link ?>" target="_blank"><?php echo $gallery ?></a></li>
									<?php endwhile; ?>
								<?php endif; ?>
								</ul>
							</div> <!-- /.galleries -->
					</div> <!-- /.container -->
				</section> <!-- /#photo -->

				<?php if( have_rows('screen_washes') ): ?>
					<section id="video">
						<div class="container">
							<h3>Screen Wash Gallery</h3>
							<?php while( have_rows('screen_washes')): the_row();
								$video = get_sub_field('screen_wash')?>
								<div class="screen-video">
									<div class='embed-container'>
										<?php echo $video ?>
									</div>
								</div> <!-- /.screen-video -->
							<?php endwhile; ?>
						</div> <!-- /.container -->
					</section> <!-- /.video -->
				<?php endif; ?>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		

	
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end