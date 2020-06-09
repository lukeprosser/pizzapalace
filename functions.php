<?php 

  // Load scripts
  function pizzaPalace_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
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
    add_theme_support('widgets');
  }
  add_action('after_setup_theme', 'pizzaPalace_setup');

?>