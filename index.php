<?php 

  get_header();

?>

<main class="site-content" role="main">

  <?php 

    if (have_posts()) {
      while (have_posts()) {
        the_post();
        get_template_part( 'content', get_post_format() );
      }
    } else {
      echo '<p>No content found</p>';
    }

  ?>

</main><!-- .site-content -->

<?php 

  get_footer();

?>