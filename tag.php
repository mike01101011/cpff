<?php get_header(); ?>
<?php include("navigation.php"); ?>

<!-- carousel - start -->
	<? include("carousel.php"); ?>
<!-- carousel - end -->
  <div class="container">

    <div class="content">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>