<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index">

    <div class="container">
    
      <?php 

        if (have_posts()) : ?>

          <h2>Search results for: <?php the_search_query(); ?></h2>

          <?php 
          while (have_posts()) : the_post();
            
            get_template_part('content');
            
          endwhile;
        
        else :
          echo '<p>No content found</p>';
        endif;

      ?>

    
    </div><!-- .container -->
  
  </div><!-- .post-index -->
    
  <?php get_sidebar(); ?>

</main><!-- .site-content -->

<?php get_footer(); ?>