<?php get_header(); ?>
<?php include("navigation.php"); ?>


<!-- carousel - start -->
  <? include("carousel.php"); ?>
<!-- carousel - end -->
  <div class="container">
    <div class="content">

      <h1>Category Archives: <?php single_cat_title(); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_footer(); ?>