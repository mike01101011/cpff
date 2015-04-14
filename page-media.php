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
					'post_type' => 'media',
					'order' => 'DSC'
				)
			);
		?>
		 <!-- start loop -->
		<?php if ( $onePageQuery->have_posts() ) : ?>
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
				<section id="year">
                    <h3><?php the_field( 'media_year' ); ?></h3>
                    <?php while ( has_sub_field('news_article') ): ?>
                    <ul>
                    	<li>
                    		<a href="<?php the_sub_field('article_link'); ?>" target="_blank">
                    			<span><?php the_sub_field('article_publisher');?></span> - <?php the_sub_field('article_title'); ?>
                    		</a>
                    	</li>
                    </ul>
	                <?php endwhile; ?>
				</section><!-- /#year -->
					
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