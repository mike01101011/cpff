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
					'post_type' => 'media',
					'order' => 'DSC'
				)
			);
		?>
		 <!-- start loop -->
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
				<section id="year">
					<div class="container">
	                    <h3><?php the_field( 'media_year' ); ?></h3>
	                    <ul>
	                    <?php while ( has_sub_field('news_article') ): ?>
	                    	<li>
	                    		<a href="<?php the_sub_field('article_link'); ?>" target="_blank">
	                    			<span class="name"><?php the_sub_field('article_publisher');?>: </span> <em><?php the_sub_field('article_title'); ?></em>
	                    		</a>
	                    	</li>
		                <?php endwhile; ?>
	                    </ul>
	                </div> <!-- /.container -->
				</section><!-- /#year -->
					
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
		<?php endif; ?>
		<!-- end loop -->
	
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end