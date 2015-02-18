<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400|Open+Sans:400italic,400' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  


  <header>
    <!-- <div class="container"> -->
      <div class="menu-button">
        <svg viewBox="0 0 109 109">
            <filter id="dropShadow">
              <feGaussianBlur in="SourceAlpha" stdDeviation="1" />
              <feOffset dx="1" dy="1" />
              <feMerge>
                  <feMergeNode />
                  <feMergeNode in="SourceGraphic" />
              </feMerge>
            </filter>
            <path class="circle" d="M54.334 1.934c-28.894 0-52.4 23.506-52.4 52.4 0 28.893 23.506 52.4 52.4 52.4 28.893 0 52.4-23.507 52.4-52.4 0-28.894-23.507-52.4-52.4-52.4zM34.257 68.18h40.7c1.502 0 2.82 1.32 2.82 2.82 0 1.53-1.292 2.82-2.82 2.82v-.005H34.255c-1.5 0-2.818-1.316-2.818-2.818 0-1.5 1.318-2.816 2.82-2.816zm-2.82-13.98c0-1.51 1.318-2.82 2.82-2.82h40.7c1.5 0 2.82 1.31 2.82 2.81s-1.32 2.82-2.82 2.82v.006H34.255c-1.5 0-2.818-1.315-2.818-2.817zm43.52-13.982H34.255c-1.5 0-2.818-1.318-2.818-2.82s1.318-2.82 2.82-2.82h40.7c1.502 0 2.82 1.318 2.82 2.82s-1.32 2.82-2.82 2.82z" filter="url(#dropShadow)"/>
            <path class="rectangle" d="M34.255 40.218h40.702c1.5 0 2.82-1.318 2.82-2.82s-1.318-2.82-2.82-2.82h-40.7c-1.502 0-2.82 1.318-2.82 2.82s1.318 2.82 2.818 2.82zm0 33.598h40.702v.005c1.528 0 2.82-1.29 2.82-2.817 0-1.5-1.318-2.82-2.82-2.82h-40.7c-1.502 0-2.82 1.316-2.82 2.816 0 1.5 1.318 2.817 2.818 2.817zm0-16.8h40.702v-.007c1.5 0 2.82-1.32 2.82-2.82s-1.32-2.81-2.82-2.81h-40.7c-1.502 0-2.82 1.31-2.82 2.82 0 1.5 1.318 2.815 2.818 2.815z"/>
        </svg>
      </div> <!-- menu button - end -->
    <!-- </div> .container -->
    

    <nav class="main-navigation">
      <!-- off-screen menu = start -->
      <div class="menu-container clearfix">
        <div class="menu-top clearfix">
          <div class="menu-title">
            <h1>Main Menu</h1>
          </div> <!-- /.menu-title -->
          <div class="exit-button">
            <svg viewBox="0 0 108.667 108.667"><path d="M54.334 1.934c-28.894 0-52.4 23.506-52.4 52.4 0 28.893 23.506 52.4 52.4 52.4 28.893 0 52.4-23.507 52.4-52.4 0-28.894-23.507-52.4-52.4-52.4zm22.686 73.41l-.225.276c-.477.49-1.337.982-2.186.982-1.22 0-1.89-.68-2.18-.97L54.6 57.982 36.94 75.634c-.47.476-1.33.965-2.168.965-1.225 0-1.922-.72-2.185-.99-1.038-1.04-1.144-2.86-.228-4.21l.24-.3 17.65-17.64-17.83-17.65c-1.06-1.06-1.17-2.88-.26-4.24l.24-.3c1.023-1.04 2.912-1.14 4.23-.25l.297.24L54.58 48.92l17.66-17.66c1.036-1.034 2.92-1.13 4.236-.242l.32.22.22.322c.92 1.357.81 3.174-.24 4.227L59.13 53.46l17.65 17.656c1.056 1.05 1.163 2.87.243 4.232z"/></svg>
          </div> <!-- /.exit-button -->
        </div> <!-- /.menu-top -->
        <div class="menu-items">
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home" class="home">Home</a>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_locations' => 'primary'
          )); ?>
        </div><!-- /.menu-items -->
      </div> <!-- .menu-container .clearfix -->
      <!-- off-screen menu = end -->
    </nav>
  </header><!--/.header-->