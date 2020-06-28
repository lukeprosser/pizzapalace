    <footer class="site-footer">

      <div class="footer-widgets">

        <div class="container">
        
          <div class="footer-widget-area">
            <nav class="footer-nav">
              <?php 
                $args = array(
                  'theme_location' => 'footer1'
                );

                wp_nav_menu($args);
              ?>
            </nav><!-- .footer-nav -->
          </div>

          <div class="footer-widget-area">
            <nav class="footer-nav">
              <?php 
                $args = array(
                  'theme_location' => 'footer2'
                );

                wp_nav_menu($args);
              ?>
            </nav><!-- .footer-nav -->
          </div>

          <?php if (is_active_sidebar('address')) : ?>
            <div class="footer-widget-area">
              <?php dynamic_sidebar('address'); ?>
            </div>
          <?php endif; ?>
        
        </div><!-- .container -->
      
      </div><!-- .footer-widgets -->

      <div class="footer-details">

        <div class="container">
        
          <div class="footer-detail">
            <p><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
          </div>

          <div class="footer-detail">
            <p>Built by <a href="https://www.createdeluxe.com/">CreateDeluxe</a></p>
          </div>
        
        </div><!-- .container -->
      
      </div><!-- .footer-details -->

    </footer><!-- .site-footer -->

    <?php wp_footer(); ?>

  </body>
</html>