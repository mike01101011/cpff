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
	<!-- <div class="container"> -->
	<div class="container">
		<!-- page title - start -->
		<h2><?php the_title(); ?></h2>
		<!-- page title - end -->
	</div> <!-- /.container -->
		

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
					<div class="container">
						<p><?php the_field( 'festival_history' ); ?></p>
					</div> <!-- /.container -->
				</section> <!-- #festial_bio -->
				
				<section id="staff_members">
					<div class="container clearfix">
						<h2>Festival Staff Members</h2>
							<?php while ( has_sub_field('staff_members') ): ?>
								<?php if( get_field('staff_member_row')):?>
									<div class="staff-member <?php the_field( 'staff_member_row' ); ?>">
										<div class="staff-image">
											<?php $image = get_sub_field('staff_image'); ?>
					                        <img src="<?php echo $image['sizes']['medium'] ?>">
										</div> <!-- /.staff-image -->
					                    <div class="staff-info">
						                    <div class="staff-name">
												<h3><?php the_sub_field('staff_name'); ?></h3>
						                    </div> <!-- /.staff-name -->

											<div class="staff-title">
												<h4><?php the_sub_field('staff_title'); ?></h4>
											</div> <!-- /.staff-title -->
					                    </div> <!-- /.staff-info -->
									</div> <!-- /.staff-member -->
								<?php endif; ?>
							<?php endwhile; ?>	
					</div> <!-- /.container -->
				</section><!-- /#staff_members -->

				<section id="board_members">
					<div class="container clearfix">
						<h2>Festival Board Members</h2>
						<div class="members">
							<ul>
								<?php while ( has_sub_field('board_members') ): ?>
									<li class="board_member"><?php the_sub_field('board_member'); ?></li>
								<?php endwhile; ?>
							</ul>
						</div> <!-- /.members -->
					</div> <!-- /.container -->
				</section> <!-- /#board_members -->
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		<!-- end loop -->
	<!-- </div> --> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end