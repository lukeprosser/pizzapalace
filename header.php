<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">  

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="site-header">
 
      <div class="container">

        <div class="header-inner">

          <h1 class="header-logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
          </h1>

          <label class="hamburger" for="toggle">&#9776;</label>
          <input type="checkbox" id="toggle"> 
          
          <nav class="site-nav">
            <?php 
              $args = array(
                'theme_location' => 'primary'
              );

              wp_nav_menu($args);
            ?>
            
            <div class="header-search">
              <?php get_search_form(); ?>
            </div><!-- .header-search --> 

          </nav><!-- .site-nav -->
          
        </div>

      </div><!-- .container -->

    </header><!-- .site-header -->