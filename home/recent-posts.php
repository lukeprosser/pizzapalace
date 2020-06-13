<section class="recent-posts">

  <div class="container">
  
    <div class="recent-posts-inner">

      <h2 class="section-header">From the blog</h2>
    
      <div class="recent-posts-list">
          
        <?php 

          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

              <!-- <div class="recent-posts-item"> -->
                <a class="recent-posts-item" href="<?php the_permalink() ?>">
                  <div class="post-thumbnail">
                    <?php the_post_thumbnail('small-thumbnail'); ?>
                  </div>
                  <div class="post-title">
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              <!-- </div> -->
              
            <?php endwhile;
            
          else :
            echo '<p>No recent posts</p>';
          endif;

          wp_reset_postdata();

        ?>
          
      </div>
    
    </div>
  
  </div>

</section>