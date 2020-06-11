<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index">

    <div class="container">
    
      <?php 

        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            
            <article class="post">

              <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <p class="post-meta"><?php the_time('d/m/y') ?> | <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | 

                <?php 

                  $categories = get_the_category();
                  $separator = ", ";
                  $output = '';

                  if ($categories) {

                    foreach ($categories as $category) {
                      $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
                    }

                    // Remove any starting/trailing commas
                    echo trim($output, $separator);

                  }

                ?>

              </p>

              <?php the_post_thumbnail('banner-image'); ?>
		
              <?php the_content(); ?>

            </article>
            
          <?php endwhile;

        else :
          echo '<p>No content found</p>';
        endif;

      ?>

    </div><!-- .container -->
  
  </div><!-- .post-index -->
    
  <?php get_sidebar(); ?>

</main><!-- .site-content -->

<?php get_footer(); ?>