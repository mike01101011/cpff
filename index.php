<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main>
  <div class="container">

    <div class="content clearfix">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>