<?php //home.php main blog index page ?>

<!-- website header - start -->
<?php get_header(); ?>
<!-- website header - end -->

<!-- website navigation - start -->
<?php include("navigation.php"); ?>
<!-- website navigation - end -->

<!-- carousel - start -->
<? include("carousel.php"); ?>
<!-- carousel - end -->

<div class="main">
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'blog' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>