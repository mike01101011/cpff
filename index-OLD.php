<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<?php include("navigation.php"); ?>

<main>

  <?php
    $onePageQuery = new WP_Query(
      array(
        'posts_per_page' => -1,
        'post_type' => 'home',
        'order' => 'DSC'
      )
    );
  ?>

  <?php if ( $onePageQuery->have_posts() ) : ?>
    <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

      <!-- large background - start -->
    	<section class="lrg-bg">
        <svg class="cpff-logo" viewBox="0 0 1028.25 354.869">
          <g class="text">
            <path d="M15.78 126.184c9.26-9.462 21.04-14.194 35.343-14.194 19.143 0 33.13 6.343 41.98 19.03 4.887 7.125 7.508 14.275 7.866 21.453H76.944c-1.527-5.51-3.486-9.673-5.88-12.477-4.28-4.996-10.626-7.492-19.03-7.492-8.56 0-15.307 3.524-20.248 10.563-4.943 7.054-7.41 17.022-7.41 29.918 0 12.898 2.61 22.557 7.818 28.976 5.21 6.43 11.84 9.638 19.875 9.638 8.24 0 14.525-2.75 18.847-8.27 2.39-2.966 4.376-7.407 5.954-13.336h23.865c-2.056 12.528-7.315 22.722-15.776 30.58-8.46 7.847-19.305 11.774-32.524 11.774-16.36 0-29.224-5.304-38.587-15.91C4.483 205.77-.198 191.156-.198 172.59c0-20.067 5.334-35.535 15.978-46.406m151.707 18.41c4.27 1.83 7.78 4.608 10.525 8.356 2.333 3.18 3.748 6.443 4.27 9.798.517 3.36.78 8.833.78 16.432v49.967h-22.698V177.37c0-4.582-.777-8.272-2.324-11.082-2.012-3.96-5.835-5.938-11.455-5.938-5.835 0-10.264 1.968-13.283 5.896-3.025 3.933-4.53 9.54-4.53 16.827v46.074h-22.23V114.562h22.23v40.558c3.208-4.934 6.925-8.38 11.145-10.33 4.216-1.953 8.658-2.926 13.32-2.926 5.227 0 9.98.914 14.25 2.73m69.328-2.458c.284.024.923.066 1.91.114v22.778c-1.4-.152-2.654-.257-3.75-.314-1.084-.05-1.974-.075-2.642-.075-8.95 0-14.955 2.91-18.024 8.733-1.72 3.275-2.57 8.324-2.57 15.138v40.636h-22.386v-85.02h21.21v14.82c3.436-5.672 6.425-9.543 8.972-11.622 4.16-3.485 9.567-5.225 16.226-5.225.413 0 .762.01 1.052.035M265.82 133.986h-22.55V113.47h22.547v20.516zm-22.54 10.14h22.544v85.02H243.28v-85.02zm47.727 57.88c.47 3.95 1.487 6.757 3.054 8.422 2.774 2.96 7.893 4.446 15.365 4.446 4.387 0 7.878-.65 10.464-1.955 2.59-1.298 3.876-3.25 3.876-5.85 0-2.496-1.043-4.395-3.126-5.69-2.08-1.305-9.834-3.537-23.255-6.71-9.663-2.39-16.464-5.387-20.417-8.972-3.955-3.536-5.925-8.633-5.925-15.29 0-7.85 3.084-14.598 9.258-20.238 6.175-5.646 14.866-8.467 26.07-8.467 10.63 0 19.296 2.125 25.99 6.36 6.697 4.238 10.54 11.556 11.53 21.956h-22.23c-.314-2.856-1.122-5.12-2.423-6.79-2.453-3.013-6.626-4.52-12.52-4.52-4.848 0-8.306.758-10.364 2.263-2.054 1.51-3.083 3.27-3.083 5.3 0 2.554 1.088 4.395 3.278 5.544 2.19 1.19 9.93 3.25 23.216 6.158 8.854 2.083 15.493 5.227 19.908 9.44 4.368 4.267 6.554 9.597 6.554 15.99 0 8.418-3.14 15.304-9.418 20.63-6.28 5.328-15.98 7.995-29.112 7.995-13.386 0-23.275-2.82-29.66-8.457-6.383-5.65-9.577-12.834-9.577-21.57h22.546zm53.285-41.268v-15.83h11.854v-23.715h21.996v23.714h13.806v15.83h-13.806v44.93c0 3.488.444 5.658 1.327 6.515.89.857 3.59 1.287 8.11 1.287.68 0 1.392-.02 2.145-.037.753-.03 1.492-.07 2.222-.122v16.614l-10.528.39c-10.507.366-17.685-1.458-21.53-5.456-2.497-2.55-3.745-6.478-3.745-11.776V160.74H344.29zm74.403-26.752h-22.542V113.47h22.542v20.516zm-22.542 10.14h22.542v85.02h-22.542v-85.02zm88.292 1.72c5.93 2.658 10.827 6.85 14.69 12.58 3.483 5.052 5.744 10.91 6.772 17.572.6 3.915.843 9.535.733 16.873h-61.918c.343 8.535 3.31 14.515 8.887 17.947 3.4 2.135 7.48 3.202 12.257 3.202 5.066 0 9.18-1.307 12.345-3.907 1.727-1.397 3.247-3.353 4.576-5.848h22.693c-.6 5.04-3.343 10.167-8.24 15.364-7.615 8.27-18.28 12.4-31.987 12.4-11.314 0-21.297-3.48-29.95-10.46-8.648-6.976-12.967-18.32-12.967-34.034 0-14.73 3.895-26.024 11.708-33.883 7.81-7.858 17.944-11.79 30.408-11.79 7.394.002 14.062 1.33 19.99 3.985m-33.254 19.208c-3.144 3.234-5.117 7.62-5.925 13.158h38.302c-.407-5.9-2.38-10.378-5.925-13.435-3.543-3.055-7.94-4.588-13.18-4.588-5.71 0-10.134 1.624-13.272 4.865m165.296 14.32c-6.728 5.624-16.336 8.43-28.828 8.43h-23.942v41.34H539.85V114.17h49.36c11.385 0 20.454 2.97 27.22 8.897 6.768 5.93 10.155 15.108 10.155 27.532 0 13.57-3.37 23.16-10.1 28.775m-18.337-41.41c-3.036-2.55-7.303-3.83-12.78-3.83h-21.654v33.855h21.653c5.48 0 9.745-1.374 12.78-4.13 3.042-2.756 4.562-7.122 4.562-13.104-.003-5.977-1.52-10.246-4.563-12.79M653.327 133.986h-22.54V113.47h22.54v20.516zm-22.54 10.14h22.54v85.02h-22.54v-85.02zm26.546 16.612v-15.83h11.86v-23.715h21.99v23.714h13.81v15.83h-13.81v44.93c0 3.488.443 5.658 1.327 6.515.888.857 3.594 1.287 8.11 1.287.678 0 1.394-.02 2.15-.037.75-.03 1.497-.07 2.222-.122v16.614l-10.527.39c-10.51.366-17.686-1.458-21.534-5.456-2.49-2.55-3.737-6.478-3.737-11.776V160.74h-11.86zm71.995 41.267c.46 3.95 1.48 6.758 3.05 8.423 2.768 2.96 7.89 4.446 15.364 4.446 4.386 0 7.874-.65 10.458-1.955 2.588-1.298 3.88-3.25 3.88-5.85 0-2.496-1.042-4.395-3.13-5.69-2.073-1.305-9.828-3.537-23.247-6.71-9.662-2.39-16.473-5.387-20.418-8.972-3.96-3.536-5.932-8.633-5.932-15.29 0-7.85 3.09-14.598 9.263-20.238 6.177-5.646 14.864-8.467 26.068-8.467 10.633 0 19.298 2.125 25.99 6.36 6.696 4.238 10.536 11.556 11.53 21.956h-22.23c-.312-2.856-1.12-5.12-2.425-6.79-2.454-3.013-6.624-4.52-12.52-4.52-4.848 0-8.3.758-10.356 2.263-2.065 1.51-3.098 3.27-3.098 5.3 0 2.554 1.098 4.395 3.29 5.544 2.193 1.19 9.926 3.25 23.213 6.158 8.853 2.083 15.492 5.227 19.912 9.44 4.368 4.267 6.547 9.597 6.547 15.99 0 8.418-3.138 15.304-9.41 20.63-6.285 5.328-15.99 7.995-29.12 7.995-13.384 0-23.275-2.82-29.654-8.457-6.385-5.65-9.58-12.834-9.58-21.57h22.55zm-514.69 35.16h81.974v20.2h-58.11v26.44h50.936v19.976h-50.936v48.193h-23.865zm109.058 19.655H301.15v-20.512h22.546v20.512zm-22.545 10.14h22.547v85.012H301.15V266.96zm30.158-29.948h22.235v114.965h-22.235zm136.414 30.26c3.64 1.455 6.945 4.003 9.902 7.65 2.393 2.956 4.01 6.6 4.844 10.914.518 2.855.775 7.047.775 12.558l-.15 53.583h-22.78V297.85c0-3.227-.52-5.875-1.56-7.953-1.977-3.955-5.614-5.93-10.92-5.93-6.134 0-10.376 2.54-12.716 7.643-1.195 2.698-1.795 5.954-1.795 9.754v50.613h-22.384v-50.613c0-5.048-.52-8.717-1.562-11.002-1.865-4.104-5.534-6.165-10.996-6.165-6.35 0-10.61 2.062-12.797 6.165-1.19 2.342-1.79 5.817-1.79 10.453v51.162h-22.54v-84.86h21.605v12.4c2.753-4.42 5.354-7.565 7.802-9.437 4.31-3.326 9.9-4.99 16.77-4.99 6.504 0 11.75 1.432 15.753 4.287 3.223 2.658 5.668 6.055 7.33 10.225 2.915-4.996 6.528-8.67 10.843-10.998 4.58-2.346 9.677-3.515 15.293-3.515 3.736-.003 7.43.727 11.07 2.18M525.095 237.166h81.977v20.198h-58.11v26.442h50.93v19.975h-50.93v48.193h-23.867zm139.212 31.512c5.927 2.662 10.82 6.854 14.688 12.58 3.48 5.052 5.738 10.91 6.77 17.575.598 3.91.844 9.534.734 16.882h-61.925c.343 8.523 3.304 14.5 8.89 17.935 3.395 2.132 7.478 3.2 12.253 3.2 5.06 0 9.183-1.302 12.35-3.902 1.728-1.406 3.253-3.35 4.566-5.854h22.698c-.593 5.05-3.344 10.167-8.233 15.37-7.62 8.26-18.28 12.4-31.99 12.4-11.316 0-21.295-3.48-29.946-10.46-8.646-6.976-12.97-18.32-12.97-34.042 0-14.72 3.9-26.017 11.71-33.877 7.803-7.856 17.94-11.79 30.4-11.79 7.4.002 14.07 1.334 20.002 3.983m-33.262 19.206c-3.142 3.242-5.115 7.618-5.928 13.164h38.306c-.408-5.9-2.38-10.384-5.928-13.438-3.545-3.058-7.93-4.587-13.186-4.587-5.703 0-10.128 1.627-13.265 4.86"/>
            <path d="M710.197 324.836c.465 3.955 1.484 6.757 3.05 8.427 2.768 2.962 7.89 4.438 15.364 4.438 4.39 0 7.876-.644 10.464-1.94 2.584-1.3 3.876-3.252 3.876-5.853 0-2.5-1.043-4.395-3.12-5.694-2.084-1.296-9.84-3.533-23.258-6.714-9.657-2.388-16.468-5.375-20.418-8.965-3.955-3.54-5.928-8.63-5.928-15.29 0-7.848 3.09-14.597 9.254-20.24 6.182-5.64 14.873-8.46 26.073-8.46 10.638 0 19.298 2.116 25.994 6.356 6.696 4.23 10.545 11.553 11.534 21.948h-22.23c-.316-2.847-1.12-5.113-2.425-6.78-2.448-3.013-6.622-4.52-12.52-4.52-4.85 0-8.3.756-10.36 2.26-2.056 1.516-3.09 3.28-3.09 5.307 0 2.55 1.096 4.395 3.283 5.537 2.192 1.195 9.93 3.252 23.218 6.165 8.85 2.078 15.488 5.22 19.908 9.438 4.372 4.262 6.556 9.59 6.556 15.984 0 8.422-3.142 15.3-9.42 20.63-6.28 5.33-15.985 8-29.11 8-13.393 0-23.278-2.826-29.662-8.47-6.385-5.64-9.574-12.828-9.574-21.563H710.2zm53.283-41.262v-15.83h11.852v-23.71h22v23.71h13.806v15.83h-13.806V328.5c0 3.49.44 5.65 1.327 6.52.877.854 3.583 1.28 8.104 1.28.682 0 1.397-.01 2.153-.03.746-.036 1.49-.07 2.22-.124v16.61l-10.53.39c-10.51.37-17.684-1.445-21.524-5.452-2.496-2.554-3.752-6.478-3.752-11.785v-52.337h-11.85zm74.402-26.754h-22.545v-20.512h22.545v20.512zm-22.54 10.14h22.545v85.012h-22.545V266.96zm86.863 0h23.872l-30.705 85.012h-23.44l-30.486-85.013h24.962l17.703 62.71zm57.362 33.305c4.14-.518 7.092-1.168 8.875-1.945 3.2-1.354 4.798-3.463 4.798-6.323 0-3.48-1.23-5.888-3.677-7.215-2.456-1.327-6.056-1.986-10.796-1.986-5.32 0-9.09 1.3-11.306 3.897-1.58 1.93-2.64 4.52-3.16 7.8h-21.443c.46-7.435 2.553-13.543 6.257-18.323 5.9-7.496 16.033-11.24 30.396-11.24 9.345 0 17.65 1.846 24.917 5.546 7.254 3.683 10.89 10.66 10.89 20.896v39c0 2.707.047 5.985.147 9.83.158 2.913.603 4.886 1.327 5.928.73 1.04 1.82 1.898 3.28 2.574v3.273h-24.18c-.677-1.71-1.146-3.326-1.402-4.838-.26-1.504-.47-3.227-.628-5.143-3.09 3.326-6.64 6.16-10.674 8.498-4.807 2.76-10.25 4.135-16.314 4.135-7.742 0-14.135-2.19-19.184-6.59-5.05-4.394-7.57-10.616-7.57-18.683 0-10.453 4.06-18.01 12.184-22.694 4.447-2.553 10.994-4.367 19.637-5.463l7.626-.935zm13.59 10.375c-1.424.882-2.86 1.595-4.31 2.14-1.446.554-3.437 1.062-5.968 1.524l-5.064.936c-4.745.83-8.15 1.846-10.216 3.04-3.5 2.03-5.25 5.177-5.25 9.44 0 3.8 1.068 6.547 3.203 8.228 2.145 1.69 4.74 2.536 7.804 2.536 4.86 0 9.333-1.406 13.423-4.21 4.096-2.808 6.214-7.927 6.376-15.37v-8.264zm30.067-73.628h23.024v114.965h-23.024z"/>
          </g>
          <g class="reel" >
            <path d="M905.776 0C838.136 0 783.3 54.834 783.3 122.474S838.137 244.95 905.777 244.95s122.474-54.835 122.474-122.476C1028.25 54.834 973.417 0 905.777 0zm1.25 137.48c0 4.52-3.664 8.183-8.183 8.183-4.518 0-8.182-3.663-8.182-8.182 0-4.52 3.666-8.18 8.184-8.18 4.52 0 8.182 3.662 8.182 8.182zm-3.675-15.006c0-1.34 1.087-2.424 2.426-2.424 1.34 0 2.426 1.085 2.426 2.424 0 1.34-1.085 2.425-2.425 2.425-1.34 0-2.424-1.087-2.424-2.427zm-12.992-14.996c4.52 0 8.184 3.664 8.184 8.183s-3.663 8.185-8.183 8.185-8.18-3.664-8.18-8.183 3.66-8.182 8.18-8.182zm-86.672-15.455c0-18.745 15.198-33.942 33.94-33.942 18.747 0 33.943 15.2 33.943 33.944s-15.197 33.94-33.944 33.94c-18.742 0-33.94-15.195-33.94-33.94zm71.824 131.524c-18.748 0-33.943-15.197-33.943-33.94 0-18.747 15.195-33.944 33.942-33.944 18.742 0 33.94 15.197 33.94 33.943 0 18.744-15.198 33.94-33.94 33.94zm28.788-116.372c0-4.52 3.662-8.183 8.183-8.183s8.185 3.664 8.185 8.183-3.662 8.183-8.183 8.183-8.182-3.664-8.182-8.183zm16.667 30.002c-4.518 0-8.18-3.663-8.18-8.183s3.662-8.182 8.18-8.182c4.52 0 8.184 3.663 8.184 8.182 0 4.52-3.665 8.183-8.186 8.183zM900.662 54.14c0-18.744 15.196-33.94 33.94-33.94 18.746 0 33.943 15.196 33.943 33.94s-15.197 33.943-33.943 33.943c-18.744 0-33.94-15.197-33.94-33.942zm71.824 131.223c-18.747 0-33.942-15.197-33.942-33.942s15.195-33.94 33.942-33.94c18.744 0 33.94 15.197 33.94 33.94s-15.196 33.944-33.94 33.944z"/>
          </g>
        </svg>


        <!-- Name of Program - start -->
        <?php if( get_field('program_name')):?>
        <div class="program-title">
          <h3 class="present">presents</h3>
          <h1 class="programTitle"><?php the_field('program_name'); ?></h1>
        </div> <!-- /.program-title -->
        <?php endif; ?>
        <!-- Name of Program - end -->

        
        <?php 

        $image = get_field('lead_logo');

        if( !empty($image) ): ?>
        <div class="presented-by">
          <div class="container">
            <h3 class="present">presented by</h3>
              <div class="leadSponsor">
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div> 
          </div> <!-- /.container -->
        </div> <!-- /.presented-by -->
        <?php endif; ?>

        <!-- Down Arrow - start -->
        <a href="./#info"><svg class="arrow" viewBox="0 0 242.818 242.818">
          <path d="M121.41 23.45c-54.017 0-97.96 43.944-97.96 97.96 0 54.017 43.943 97.958 97.96 97.958s97.958-43.943 97.958-97.96c0-54.016-43.942-97.958-97.96-97.958zm64.133 83.16l-.69.864-63.122 63.695-63.757-63.75c-3.03-3.013-3.336-8.24-.695-12.155l.007.015.003.004.65-.798c1.37-1.404 3.836-2.817 6.276-2.817 3.497 0 5.423 1.957 6.257 2.786l51.2 50.69 50.718-50.693c1.347-1.37 3.817-2.772 6.226-2.772 3.518 0 5.52 2.07 6.275 2.845 2.98 2.978 3.287 8.21.654 12.084z"/>
        </svg></a>
          <!-- Down Arrow - end -->
    	</section><!-- /.lrg-bg -->
      <!-- large background - end -->

      <!-- Festival Info - start -->
      <?php if( have_rows('festival_info')):?>
        <?php while(have_rows('festival_info') ): the_row();
          $info = get_sub_field('info');
        ?>
          <section id="info">
            <div class="container">
            	<?php echo $info ?>
            </div>
          </section> <!-- .info -->
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- Festival Info - end -->

      
      <!-- News Section - start -->
      <section class="news">
        <h2>Latest News</h2>
        <?php if( have_rows('latest_news')):?>
          <?php while(have_rows('latest_news') ): the_row();
            $info = get_sub_field('latest');
          ?>
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