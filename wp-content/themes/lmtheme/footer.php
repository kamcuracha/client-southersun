<div class="section section-newsletter">
    <div class="container">
        <div class="col-sm-12 col-md-6 py3 text-left">
            <p>Newsletter be in the know.</p>
            <a id="modalBtn" class="btn btn-white mx2">Subscribe</a>

            <div id="modalSubs" class="modal">
                <div class="modal-content">
                    <span class="modalClose">&times;</span>
                    <div class="tnp tnp-subscription container-fluid">
                        <form id="form_modalsubs" method="post" action="<?php echo get_site_url(); ?>/?na=s" onsubmit="return newsletter_check(this)">
                            <div class="form-group frm_form_field form-field tnp-f1ield tnp-f1ield-email"><label for="tnp_field_email" class="frm_primary_label">Email <span class="frm_required">*</span></label>
                                <input class="tnp-email form-control" type="email" name="ne" required></div><br>
                            <div class="frm_submit tnp-fie1ld tnp-fie1ld-button"><input class="btn btn-green tnp-submit" type="submit" value="Subscribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 py3 text-right">
            <?php if( have_rows('links', 'option') ): ?>
            <p>Stay connected</p>
            <ul class="social-icons">
                <?php while( have_rows('links', 'option') ): the_row(); ?>
                <li>
                    <a href="<?php the_sub_field('link'); ?>" target="_blank">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-<?php the_sub_field('media'); ?> fa-stack-1x"></i>
                      </span>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<footer class="section section-prefooter bg-lgray">
  <div class="container">
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title">
                  <a href="/">
                      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-logo-ssf.png" alt="">
                  </a>
              </h4>
              <ul class="widget-address">
                  <li>&copy; <?php echo date("Y") ?> <?php echo get_bloginfo( 'name' ); ?>.</li>
                  <li>ABN 62 081 162 843</li>
                  <li>ACL Number 654321</li>
                  <li>Website by <a class="lm-link" target="_blank" href="https://www.lightmedia.com.au/">Light Media</a></li>
                  <li class="my3">
                      <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-footer-partners-fbaa.png" alt=""></a>
                      <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-footer-partners-mfaa.png" alt=""></a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title">Quick Links</h4>
              <ul class="widget-links">
                  <li><a href="/about-us">About Us</a></li>
                  <li><a href="/contact-us">Apply Now</a></li>
                  <li><a href="/contact-us">Contact Us</a></li>
                  <li><a href="/privacy">Privacy Policy</a></li>
                  <li><a href="/terms">Terms & Conditions</a></li>
              </ul>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title">Our Services</h4>
              <ul class="widget-links">
                  <?php
                  $args = array(
                      'posts_per_page' => 4,
                      'post_type' => 'service'
                  );
                  $services = new WP_Query($args);

                  if ($services->have_posts()):
                  ?>
                        <?php while($services->have_posts()): $services->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                  <?php endif; ?>
<!--                  <li><a href="/privacy">Privacy</a></li>-->
<!--                  <li><a href="/privacy-wealth">Privacy Wealth Management</a></li>-->
<!--                  <li><a href="/faq">FAQ's</a></li>-->
<!--                  <li><a href="/terms">Terms & Conditions of Site</a></li>-->
              </ul>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title center">Apply in a few minutes</h4>
              <p class="center">Lock in your repayments<br>
                  Free no obligation quote<br>
                  Speak to a finance professional
                  <span class="highlight">For assistance call:</span>
                  <span class="highlight2">1800 234 567</span>
              </p>
          </div>
      </div>
  </div>
</footer>
<footer class="section section-footer">
  <div class="container">
    <div class="footer-center">The new way to get a 'Better Deal'! <a href="/contact-us" class="btn btn-white-v2 mx2">Get started</a></div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>