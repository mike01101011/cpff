<?php //home.php main blog index page ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'blog' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>