<?php get_header(); ?>
<?php include("navigation.php"); ?>


<!-- carousel - start -->
  <? include("carousel.php"); ?>
<!-- carousel - end -->  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<!-- CONTENT -->


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>