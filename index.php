<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index">

    <div class="container">
    
      <div class="main-column">
      
        <?php 

          if (have_posts()) : 
            while (have_posts()) : the_post();
              
              get_template_part('content'); // 'content' is simply the name of the file (content.php) - fully customisable
              
            endwhile;

          else :
            echo '<p>No content found</p>';
          endif;

        ?>
      
      </div><!-- .main-column -->
      
      <?php get_sidebar(); ?>

    </div><!-- .container -->
  
  </div><!-- .post-index -->
    
</main><!-- .site-content -->

<?php get_footer(); ?>