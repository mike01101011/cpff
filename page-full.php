<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>



<!-- carousel - start -->
	<? include("carousel.php"); ?>
<!-- carousel - end -->

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>