<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beatris
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Ubuntu&family=Yellowtail&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'beatris' ); ?></a>

    <header id="masthead" class="site-header">
      <div class="site-branding header-background">
        <div>
          <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
              rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php
			else :
				?>
          <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
              rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php
			endif;
			$beatris_description = get_bloginfo( 'description', 'display' );
			if ( $beatris_description || is_customize_preview() ) :
        ?>
          <p class="site-description">
            <?php echo $beatris_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
          <?php endif; ?>
        </div>
        <div class="social-icons">
          <a class="facebook" href="https://www.facebook.com/profile.php?id=100009707769090"
            aria-label="Beatris Facebook">
          </a>
          <a class="instagram" href="https://www.instagram.com/beatrisinkutak/" aria-label="Beatris Instagram">
          </a>
        </div>
        <img class="love-to-sew" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lovetosew.svg"/> 
        <img class="ball" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ball.svg"/> 
        <img class="pillow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pillow.svg"/> 
        <img class="nedle" src="<?php echo get_stylesheet_directory_uri(); ?>/img/nedle.svg"/> 
        <img class="pin2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pin2.svg"/> 
        <img class="thread" src="<?php echo get_stylesheet_directory_uri(); ?>/img/thread.svg"/> 
        <img class="button" src="<?php echo get_stylesheet_directory_uri(); ?>/img/button.svg"/> 
        <img class="my-heart" src="<?php echo get_stylesheet_directory_uri(); ?>/img/my-heart.svg"/> 
        <img class="machine" src="<?php echo get_stylesheet_directory_uri(); ?>/img/machine.svg"/> 


      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu"
          aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'beatris' ); ?></button>
        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->