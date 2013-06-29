<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

	<title><?php wp_title(''); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
    	<div class="sitetitle"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<img src="<?php echo get_stylesheet_directory_uri();?>/img/ddf_logo_icon.png"></a>
	</div>
    </li>

    
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar "><a href="#"><span></span></a></li>
  </ul>
  <ul class="tertieryLinks">
	<li><a href="http://www.facebook.com/detroitdesignfestival" target="_blank" class="socialFacebook">Facebook</a></li>
    <li><a href="http://twitter.com/DetDesignFest" target="_blank" class="socialTwitter">Twitter</a></li>
    <!--<li><a href="http://instagram" class="socialInstagram">Instagram</a></li>-->
    <li><a href="http://www.youtube.com/user/DetroitDesignFest" target="_blank" class="socialYouTube">YouTube</a></li>
    <li><a href="http://vimeo.com/detroitdesignfestival" target="_blank" class="socialVimeo">Vimeo</a></li>
    <li><a href="http://www.detroitcreativecorridorcenter.com/" target="_blank" class="socialDC3">DC3</a></li>
</ul>

  <section class="top-bar-section">
	
    <?php
      // Left Nav Section
      if ( has_nav_menu( 'header-menu-left' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'header-menu-left',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="left">%3$s</ul>',
              'fallback_cb' => false,
              'walker' => new appBase_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li'
              ) ),
          ) );
        }
      ?>

    <?php
      //Right Nav Section
      if ( has_nav_menu( 'header-menu-right' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'header-menu-right',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="right">%3$s</ul>',
              'fallback_cb' => false,
              'walker' => new appBase_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li'
              ) ),
          ) );
        }
      ?>
  </section>
</nav>
