<footer id="prefooter" class="section prefooter-section animatedParent">
  <div class="container">
    <div class="footer-logo animated fadeInUpShort" data-id="1">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-prime-urban.png" alt=""></a>
    </div>
    <div class="footer-social animated fadeInUpShort" data-id="2">
      <?php if( have_rows('links', 'option') ): ?>
          <?php while( have_rows('links', 'option') ): the_row(); ?>
              <a target="_blank" href="<?php the_sub_field('link'); ?>"><i class="fa fa-<?php the_sub_field('media'); ?>" aria-hidden="true"></i></a>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php hybrid_get_menu( 'secondary' );  ?>
  </div>
</footer>

<footer class="section footer-section">
  <div class="container">
    <div class="t-footer-left">&copy Prime Urban <?php echo date("Y") ?>. All rights reserved.</div>
    <div class="t-footer-right">Website by <a target="_blank" href="https://www.lightmedia.com.au/">Light Media</a></div>
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>