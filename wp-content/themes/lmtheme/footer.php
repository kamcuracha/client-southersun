<div class="section section-newsletter">
    <div class="container">
        <div class="col-sm-12 col-md-6 py3 text-left">
            <p>Newsletter be in the know.</p>
            <a href="#" class="btn btn-white mx2">Subscribe</a>
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
<footer class="section section-prefooter">
  <div class="container">
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title">Contact</h4>
              <ul class="widget-address">
                  <li>Southern Sun Financial Pty Ltd<br>
                      14 Toorak Road, South Yarra 3141, Melbourne Australia</li>
                  <li>GPO Box 49, Melbourne VIC Australia</li>
                  <li>Phone: 1800 234 567</li>
                  <li>Fax: 1800 456 789</li>
                  <li>ABN 62 081 162 843 </li>
              </ul>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title">About</h4>
              <ul class="widget-links">
                  <li><a href="/about-us#story">Our Story</a></li>
                  <li><a href="/about-us#team">Our Team</a></li>
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/contact-us">Contact Us</a></li>
              </ul>
          </div>
      </div>
      <div class="col-sm-3">
          <div class="widget">
              <h4 class="widget-title">Legals</h4>
              <ul class="widget-links">
                  <li><a href="/privacy">Privacy</a></li>
                  <li><a href="/privacy-wealth">Privacy Wealth Management</a></li>
                  <li><a href="/faq">FAQ's</a></li>
                  <li><a href="/terms">Terms & Conditions of Site</a></li>
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
    <div class="footer-center">Copyright &copy 2016-<?php echo date("Y") ?> <?php echo get_bloginfo( 'name' ); ?>. All rights reserved. Website by <a target="_blank" href="https://www.lightmedia.com.au/">Light Media</a></div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>