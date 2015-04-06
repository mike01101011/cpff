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
		

		<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'about',
					'order' => 'DSC'
				)
			);
		?>
		 <!-- start loop -->
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
				<section id="festival_bio">
					<p><?php the_field( 'festival_history' ); ?></p>
				</section> <!-- #festial_bio -->
				
				<section id="staff_members">
					<h2>Festival Staff Members</h2>

					<div class="staff">
						<?php while ( has_sub_field('staff_members') ): ?>
							
							<div class="staff-image">
								<?php $image = get_sub_field('staff_image'); ?>
		                        <img src="<?php echo $image['sizes']['medium'] ?>">
							</div> <!-- /.staff-image -->
		                    
		                    <div class="staff-name">
								<h3><?php the_sub_field('staff_name'); ?></h3>
		                    </div> <!-- /.staff-name -->

							<div class="staff-title">
								<h4><?php the_sub_field('staff_title'); ?></h4>
							</div> <!-- /.staff-title -->
						<?php endwhile; ?>
					</div> <!-- /.staff -->

				</section><!-- /#staff_members -->

				<section id="board_members">
					<h2>Festival Board Members</h2>
					<?php while ( has_sub_field('board_members') ): ?>
						<ul>
							<li><?php the_sub_field('board_member'); ?></li>
						</ul>
					<?php endwhile; ?>
				</section> <!-- /#board_members -->
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		<!-- end loop -->
	</div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end