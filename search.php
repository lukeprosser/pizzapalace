<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index search-page">

    <div class="container">

      <div class="main-column">
    
        <?php 

          if (have_posts()) : ?>

            <h2 class="section-header">Search results for: <?php the_search_query(); ?></h2>

            <?php 
            while (have_posts()) : the_post();
              
              get_template_part('content');
              
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