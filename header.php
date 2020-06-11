<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="site-header">

      <div class="container">
      
        <div class="header-inner">
        
          <div class="header-brand">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
          </div><!-- .header-brand -->

          <nav class="site-nav">
            <?php 
              $args = array(
                'theme_location' => 'primary'
              );

              wp_nav_menu($args);
            ?>
          </nav><!-- .site-nav -->

          <div class="header-search">
            <?php get_search_form(); ?>
          </div><!-- .header-search -->
        
        </div><!-- .header-inner -->

      </div><!-- .container -->

    </header><!-- .site-header -->