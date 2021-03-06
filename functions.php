<?php 

  // Load scripts
  function pizzaPalace_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('carousel', get_stylesheet_directory_uri().'/js/carousel.js', 
    array(), false, true);
  }
  add_action('wp_enqueue_scripts', 'pizzaPalace_resources');

  // Custom excerpt length
  function custom_excerpt_length() {
    return 25;
  }
  add_filter('excerpt_length', 'custom_excerpt_length');

  // Theme setup
  function pizzaPalace_setup() {
    // Register navigation menus
    register_nav_menus(array(
      'primary' => __('Primary Menu'),
      'footer1' => __('Footer Menu 1'),
      'footer2' => __('Footer Menu 2')
    ));

    // Featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 500, 200, true);
    add_image_size('banner-image', 920, 210, true);

    // Widget support
    // add_theme_support('widgets');
  }
  add_action('after_setup_theme', 'pizzaPalace_setup');

  // Add widget locations
  function initThemeWidgets() {
    register_sidebar(array(
      'name' => 'Sidebar',
      'id' => 'sidebar1',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    ));

    register_sidebar(array(
      'name' => 'Address',
      'id' => 'address'
    ));
  }
  add_action('widgets_init', 'initThemeWidgets');

?>