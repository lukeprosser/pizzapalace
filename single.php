<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-single">

    <div class="container">

      <div class="main-column">
    
        <?php 

          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              
              <article class="post">

                <?php the_post_thumbnail('banner-image', array( 'class' => 'post-banner-image' )); ?>

                <h3 class="post-title"><?php the_title(); ?></h3>

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

                <div class="post-content">
                  <?php the_content(); ?>
                </div>

              </article>
              
            <?php endwhile;

          else :
            echo '<p>No content found</p>';
          endif;

        ?>

      </div><!-- .main-column -->

      <?php get_sidebar(); ?>

    </div><!-- .container -->
  
  </div><!-- .post-single -->
    
</main><!-- .site-content -->

<?php get_footer(); ?>