<?php // loop-blog.php, used by home.php 'the blog loop' ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found no-blog-posts">
		<h2 class="entry-title">Coming Soon</h2>
		<section class="entry-content">
			<!-- <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p> -->
			<?php //get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-posts-listing-posts">


<!-- POST SUB-TITLE -->
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><?php the_title(); ?></a></h2>


<!-- IMAGE -->
			<div class="blog-posts-listing-image">
				<?php if( get_field('image')):?> <!-- start loop -->
					<?php $image = get_field('image'); if( !empty($image) ): ?>

<!-- TO PRINT ARRAY --> <!-- <pre><?php //print_r($image);?></pre> -->

						<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
					<?php endif; ?>
				<?php endif; ?> <!-- end loop -->
			</div> <!-- /.blog-posts-listing-image -->
		</div> <!-- .blog-posts-listing-posts -->
	</article><!-- #post-## -->

<?php endwhile; // End the loop. Whew. ?>

<!-- next-preview page navigation, if required -->
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div class="blog-posts-listing-navigation">
			<p class="alignleft"><?php next_posts_link('<i class="fa fa-angle-double-left"></i> Older Posts'); ?></p>
			<p class="alignright"><?php previous_posts_link('Newer Posts <i class="fa fa-angle-double-right"></i>'); ?></p>
		</div> <!-- .blog-posts-listing-navigation -->
	<?php endif; ?>
