<?php 

  function pizzaPalace_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'pizzaPalace_resources');

  // Navigation menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer1' => __('Footer Menu 1'),
    'footer2' => __('Footer Menu 2')
  ));

  function custom_excerpt_length() {
    return 25;
  }
  add_filter('excerpt_length', 'custom_excerpt_length');

?>