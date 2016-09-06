<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
    <div class="main">
      <div class="container">
          <div class="content">
            <div class="nav-wrap" id="nav-wrap">
                <div class="nav-container">
                      <div class="title-nav-wrap">
                        <div class="title-nav-box" id="nav-title">
                           <h1>
                              <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                              </a>
                            </h1>
                        </div> <!-- .title-nav-box -->
                      </div> <!-- .title-nav-wrap -->
                      <div class="hamburger">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                      </div>
                    <div class="nav-box">
                        <?php wp_nav_menu( array(
                        'container' => false,
                        'theme_location' => 'primary'
                      )); ?>
                    </div> <!-- .nav-box -->
                </div> <!-- .nav-container -->
            </div> <!-- .nav-wrap -->
          </div> <!-- .content -->
        </div> <!-- .container -->
    </div> <!-- .main -->
</header><!--/.header-->
                     



