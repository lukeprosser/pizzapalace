<section class="recent-posts">

  <div class="container">
  
    <div class="recent-posts-inner">

      <h2>The latest from the blog</h2>
    
      <div class="recent-post-list">
          
        <?php 

          $args = array(
            'post_type' => 'post'
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

              <div class="recent-post-item">
                <div class="post-thumbnail">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                </div>
                <h3><?php the_title(); ?></h3>
              </div>
              
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