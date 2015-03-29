<?php get_header(); ?>
<?php include("navigation.php"); ?>

<!-- carousel - start -->
	<? include("carousel.php"); ?>
<!-- carousel - end -->
  <div class="container">

    <h1>Not Found</h1>
    <p>Apologies, but the page you requested could not be found. Perhaps searching will help.</p>
    <?php get_search_form(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>