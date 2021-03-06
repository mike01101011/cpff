<?php // single.php single blog page ?>

<!-- Blog Post Page -->

<!-- website header - start -->
<?php get_header(); ?>
<!-- website header - end -->


<!-- website navigation - start -->
<?php include("navigation.php"); ?>
<!-- website navigation - end -->


<!-- carousel - start -->
<? include("carousel.php"); ?>
<!-- carousel - end -->


<!-- website main content - start -->
<main class="clearfix">
  <div class="container">
    <section class="blog-post">
      <!-- <div class="content"> -->
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<!-- TITLE -->

         <?php if( get_field('title')):?> <!-- start loop -->
          <div class="blog-post-title">
            <h1><?php the_field( 'title' ); ?></h1>
          </div> <!-- .blog-post-title -->
         <?php endif; ?> <!-- end loop -->

<!-- SUB-TITLE -->

          <?php if( get_field('sub-title')):?> <!-- start loop -->
            <div class="blog-post-sub-title">
              <?php the_field( 'sub-title' ); ?>
            </div> <!-- .blog-post-sub-title -->
          <?php endif; ?> <!-- end loop -->

<!-- IMAGE -->

          <?php if( get_field('image')):?> <!-- start loop -->
            <div class="blog-post-image">
              <?php $image = get_field('image'); if( !empty($image) ): ?>

<!-- TO PRINT ARRAY -->
<!-- <pre><?php //print_r($image);?></pre> -->

                  <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div> <!-- /.blog-post-image -->
          <?php endif; ?> <!-- end loop -->

<!-- INTRODUCTION -->

          <?php if( get_field('introduction')):?> <!-- start loop -->
            <div class="blog-post-introduction">
              <?php the_field( 'introduction' ); ?>
            </div> <!-- .blog-post-introduction -->
          <?php endif; ?> <!-- end loop -->

<!-- QUESTIONS-ANSWERS -->

          <?php if( have_rows('question-answer') ): ?> <!-- start loop -->
            <div class="blog-post-question-answer">
              <?php while( have_rows('question-answer') ): the_row(); $question = get_sub_field('question'); $answer = get_sub_field('answer'); ?>
                <div class="blog-post-question">
                  <?php echo $question ?>
                </div> <!-- .blog-post-question -->
                <div class="blog-post-answer">
                  <?php echo $answer ?>
                </div> <!-- .blog-post-answer -->  
              <?php endwhile; ?>
            </div> <!-- .blog-post-question-answer -->
          <?php endif; ?> <!-- end loop -->

<!-- CONCLUSION -->

          <?php if( get_field('conclusion')):?> <!-- start loop -->
            <div class="blog-post-conclusion">
              <?php the_field( 'conclusion' ); ?>
            </div> <!-- .blog-post-conclusion -->
          <?php endif; ?> <!-- end loop -->

        </div><!-- #post-## -->

        <?php //comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

      <?php //get_sidebar(); ?>
    </section> <!-- .blog-post -->
  </div> <!-- /.container -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end