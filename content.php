<article class="post-listing">

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

  <?php if (is_home() || is_archive() || is_search()) { // Show excerpt on blog index/archive/search pages ?>
    <p class="post-excerpt">
      <?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="post-read-more">Read more &raquo;</a>
    </p>
  <?php } else {
    the_content();
  } ?>

</article>