<?php get_header(); ?>

<main class="site-content" role="main">
    
  <?php 

    if (have_posts()) {
      while (have_posts()) {
        the_post(); ?>

        <article class="page">

          <div class="container">

            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

          </div>

        </article>
        
      <?php }
    } else {
      echo '<p>No content found</p>';
    }

  ?>

</main><!-- .site-content -->

<?php get_footer(); ?>