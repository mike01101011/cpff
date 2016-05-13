<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,400,600,700italic,700,800italic,800|Rajdhani:600,700|Voltaire' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.1/slick-theme.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" />

  <!-- social media - start -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@christiepitsff" />
  <meta name="twitter:creator" content="@christiepitsff" />
  <meta name="twitter:title" content="Christie Pits Film Festival" />
  <meta name="twitter:description" content="Official website for the Toronto-based Film Festival." />
  <meta name="twitter:image" content="http://christiepitsff.com/social/cpff-logo.png" />

  <meta property="og:title" content="Christie Pits Film Festival" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://christiepitsff.com/" />
  <meta property="og:description" content="Official website for the Toronto-based Film Festival." />
  <meta property="og:image" content="http://christiepitsff.com/social/cpff-logo.png" />
  <!-- social media - end -->

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="container clearfix">
        <div class="menu-button">
          <svg class="menu" viewBox="0 0 242.818 242.818">
            <defs>
                <filter id='drop-shadow'>
                  <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                  <feOffset dx="0" dy="10" result="offsetblur"/>
                  <feFlood flood-color="rgba(0,0,0,0.5)"/>
                  <feComposite in2="offsetblur" operator="in"/>
                  <feMerge>
                    <feMergeNode/>
                    <feMergeNode in="SourceGraphic"/>
                  </feMerge>
                </filter>
              </defs>
            <g filter='url(#drop-shadow)'>
            <path d="M121.41 24.344c-53.524 0-97.067 43.542-97.067 97.065 0 53.52 43.542 97.063 97.066 97.063 53.52 0 97.063-43.543 97.063-97.065 0-53.524-43.543-97.066-97.065-97.066zm38.2 133.153H84.216c-2.78 0-5.22-2.438-5.22-5.22 0-2.78 2.44-5.22 5.224-5.22h75.392c2.782 0 5.225 2.447 5.225 5.226 0 2.833-2.395 5.225-5.225 5.225v-.01zm0-31.118H84.216c-2.78 0-5.22-2.44-5.22-5.22 0-2.798 2.44-5.226 5.224-5.226h75.392c2.78 0 5.225 2.428 5.225 5.207 0 2.78-2.445 5.226-5.225 5.226v.012zm0-31.12H84.216c-2.78 0-5.22-2.44-5.22-5.224s2.44-5.225 5.224-5.225h75.392c2.782 0 5.225 2.443 5.225 5.226s-2.446 5.223-5.226 5.223z"/>
          </svg>
        </div> <!-- menu button -->
      </div> <!-- /.container -->
    </div> <!-- /.wrapper -->
  </header><!--/.header-->
    

  