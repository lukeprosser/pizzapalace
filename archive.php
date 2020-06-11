<?php get_header(); ?>

<main class="site-content" role="main">

  <div class="post-index">

    <div class="container">
    
      <?php 

        if (have_posts()) : ?>

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

          <?php while (have_posts()) : the_post();
            
            get_template_part('content');

          endwhile;
          
        else :
          echo '<p>No content found</p>';
        endif;

      ?>

    </div><!-- .container -->
  
  </div><!-- .post-index -->
    
  <?php get_sidebar(); ?>

</main><!-- .site-content -->

<?php get_footer(); ?>