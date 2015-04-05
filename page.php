<?php get_header();  ?>
<?php include("navigation.php"); ?>


<!-- carousel - start -->
  <? include("carousel.php"); ?>
<!-- carousel - end -->
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>