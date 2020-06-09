<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index">

    <div class="container">
    
      <?php 

        if (have_posts()) { ?>

          <h2>
            <?php
              if ( is_category() ) {
                echo single_tag_title() . ' archives';
              } elseif ( is_tag() ) {
                echo single_tag_title() . ' archives';
              } elseif ( is_author() ) {
                the_post();
                echo 'Author archives: ' . get_the_author();
                rewind_posts();
              } elseif ( is_day() ) {
                echo 'Daily archives: ' . get_the_date();
              } elseif ( is_month() ) {
                echo 'Monthly archives: ' . get_the_date('F Y');
              } elseif ( is_year() ) {
                echo 'Yearly archives: ' . get_the_date('Y');
              } else {
                echo 'Archives';
              }
            ?>
          </h2>

          <?php while (have_posts()) {
            the_post(); ?>
            
            <article class="post">

              <div class="post-thumbnail">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
              </div>

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

              <?php if (is_home() || is_archive()) { // Show excerpt on blog index/archive pages ?>
                <p>
                  <?php echo get_the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                </p>
              <?php } else {
                the_content();
              } ?>

            </article>

          <?php }
        } else {
          echo '<p>No content found</p>';
        }

      ?>

    
    </div><!-- .container -->
  
  </div><!-- .post-index -->
    
  <?php get_sidebar(); ?>

</main><!-- .site-content -->

<?php get_footer(); ?>