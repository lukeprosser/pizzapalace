<?php get_header(); ?>

<main class="site-content" role="main">
  
  <?php get_template_part('home/intro') ?>

  <?php // get_template_part('home/about') ?>

  <?php 

    if (have_posts()) : 
      while (have_posts()) : the_post();
        
        the_content();
        
      endwhile;

    else :
      echo '<p>No content found</p>';
    endif;

  ?>

  <?php // get_template_part('home/gallery') ?>

  <?php // get_template_part('home/recent-posts') ?>
    
  <?php // get_template_part('home/contact') ?>

</main><!-- .site-content -->

<?php get_footer(); ?>