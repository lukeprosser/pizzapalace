<?php 

/*
  Template Name: Policy Page
*/

get_header(); 

?>

<main class="site-content" role="main">
    
  <?php 

    if (have_posts()) :
      while (have_posts()) : the_post(); ?>

        <article class="page policy-page">

          <div class="container">
          
            <h2 class="page-header"><?php the_title(); ?></h2>

            <?php the_content(); ?>
          
          </div>
        
        </article>

      <?php endwhile;
    
    else :
      echo '<p>No content found</p>';
    endif;

  ?>

</main><!-- .site-content -->

<?php get_footer(); ?>