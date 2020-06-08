    <footer class="site-footer">

      <div class="footer-widgets">
      
        <?php if (is_active_sidebar('footer1')) : ?>
          <div class="footer-widget-area">
            <?php dynamic_sidebar('footer1'); ?>
          </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer2')) : ?>
          <div class="footer-widget-area">
            <?php dynamic_sidebar('footer2'); ?>
          </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('footer3')) : ?>
          <div class="footer-widget-area">
            <?php dynamic_sidebar('footer3'); ?>
          </div>
        <?php endif; ?>
      
      </div>

      <div class="footer-details">
      
        <div class="footer-detail">
          <p><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
        </div>

        <div class="footer-detail">
          <p>Built by <a href="https://www.createdeluxe.com/"><?php echo get_the_author(); ?></a></p>
        </div>
      
      </div>

    </footer><!-- .site-footer -->

    <?php wp_footer(); ?>

  </body>
</html>