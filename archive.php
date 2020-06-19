<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index archive-page">

    <div class="container">

      <div class="main-column">

        <?php 

          if (have_posts()) : ?>

            <h2 class="section-header">
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

            <?php while (have_posts()) : the_post();
              
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