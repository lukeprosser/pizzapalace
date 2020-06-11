<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet"> 

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="site-header">
 
      <div class="header-navigation">

        <div class="header-brand">
          <h1 class="header-logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
          <p class="header-tagline">~ <?php bloginfo('description'); ?> ~</p>
        </div><!-- .header-brand -->
        
        <nav class="site-nav">
          <?php 
            $args = array(
              'theme_location' => 'primary'
            );

            wp_nav_menu($args);
          ?>
        </nav><!-- .site-nav -->

      </div><!-- .header-navigation -->

      <div class="header-search">
        <div class="container">
          <?php get_search_form(); ?>
        </div>
      </div><!-- .header-search -->        

    </header><!-- .site-header -->