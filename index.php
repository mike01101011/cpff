<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main class="home home-home">

  <?php $onePageQuery = new WP_Query( array( 'posts_per_page' => -1, 'post_type' => 'home', 'order' => 'DSC' ) ); ?>

  <?php if ( $onePageQuery->have_posts() ) : ?>
    <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

<!-- large background - start -->
      <section class="lrg-bg">

<!-- TORONTO OUTDOOR PICTURE SHOW LOGO - Start -->
        <?php $image = get_field('presenter_logo'); if( !empty($image) ): ?>
          <div class="presented-by tops-presented-by">
            <div class="container">
              <!-- <h3 class="present">presented by</h3> -->
              <div class="leadPresenter">
                <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div> 
            </div> <!-- /.container -->
          </div> <!-- /.presented-by -->
        <?php endif; ?>
<!-- TOROTON OUTDOOR PICTURE SHOW LOGO - End -->

        <div class="program-title presents-program-title">
          <h3 class="present">presents</h3>
        </div> <!-- /.program-title -->

<!-- CHRISTIE PITS FILM FESTIVAL LOGO TEXT - Start -->
        <?php if( get_field('program_name')):?>
          <div class="program-title cpff-program-title">
            <h1 class="programTitle text home-cpff">Christie Pits Film Festival</h1>
          </div> <!-- /.program-title -->
        <?php endif; ?>
<!-- CHRISTIE PITS FILM FESTIVAL LOGO TEXT - End -->

        <div class="program-title presents-program-title leadSponsor">
          <h3 class="present">Lead Sponsor</h3>
        </div> <!-- /.program-title -->

<!-- SHOMI LOGO - Start -->
        <div class="shomi-banner home-shomi leadSponsor">
          <?php $image = get_field('lead_logo'); if( !empty($image) ): ?>
            <div class="presented-by">
              <div class="container">
                <!-- <h3 class="present">Lead Sponsor</h3> -->
                <a href="http://www.shomi.com" target="_blank">
                  <div class="leadSponsor leadSponsor-shomi">
<!-- TO PRINT ARRAY -->
<!-- <pre><?php //print_r($image);?></pre> -->
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </div> <!-- .leadSponsor -->
                </a>
              </div> <!-- /.container -->
            </div> <!-- /.presented-by -->
          <?php endif; ?>
        </div> <!-- .shomi-banner -->
<!-- SHOMI LOGO - End -->


<!-- Down Arrow - start -->
        <a href="./#info">
          <svg class="arrow" viewBox="0 0 242.818 242.818">
            <path d="M121.41 23.45c-54.017 0-97.96 43.944-97.96 97.96 0 54.017 43.943 97.958 97.96 97.958s97.958-43.943 97.958-97.96c0-54.016-43.942-97.958-97.96-97.958zm64.133 83.16l-.69.864-63.122 63.695-63.757-63.75c-3.03-3.013-3.336-8.24-.695-12.155l.007.015.003.004.65-.798c1.37-1.404 3.836-2.817 6.276-2.817 3.497 0 5.423 1.957 6.257 2.786l51.2 50.69 50.718-50.693c1.347-1.37 3.817-2.772 6.226-2.772 3.518 0 5.52 2.07 6.275 2.845 2.98 2.978 3.287 8.21.654 12.084z"/>
          </svg>
        </a>
<!-- Down Arrow - end -->

      </section><!-- /.lrg-bg -->
<!-- large background - end -->

<!-- Festival Info - start -->
      <?php if( have_rows('festival_info')):?>
        <?php while(have_rows('festival_info') ): the_row(); $info = get_sub_field('info'); ?>

        <section id="info" class="home-info">
<!-- Name of Program - start -->
          <?php if( get_field('program_name')):?>
            <div class="program-title">
            <!-- <h3 class="present">presents</h3> -->
              <h1 class="stranded-programTitle"><?php the_field('program_name'); ?></h1>
            </div> <!-- /.program-title -->
          <?php endif; ?>
<!-- Name of Program - end -->

          <div class="container">
            <?php echo $info ?>
          </div>
        </section> <!-- .info -->
        <?php endwhile; ?>
      <?php endif; ?>
<!-- Festival Info - end -->  

<!-- News Section - start -->
      <section class="news home-news">
        <!-- <h2>Latest News</h2> -->
        <?php if( have_rows('latest_news')):?>
          <?php while(have_rows('latest_news') ): the_row(); $info = get_sub_field('latest'); ?>
            <article class="story">
              <div class="container">
                <?php echo $info ?>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </section> <!-- .news -->
<!-- News Section - end -->


      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else: ?>
  <?php endif; ?>
</main> <!-- /.main -->

<?php get_footer(); ?>