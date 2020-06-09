<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index">

    <div class="container">
    
      <?php 

        if (have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part( 'content', get_post_format() ); // Get the content or custom post formats
          }
        } else {
          echo '<p>No content found</p>';
        }

      ?>

    
    </div><!-- .container -->
  
  </div><!-- .post-index -->
    
  <?php get_sidebar(); ?>

</main><!-- .site-content -->

<?php get_footer(); ?>