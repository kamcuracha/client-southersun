<?php
/**
 * Template Name: Contact Us
 */

get_header(); // Loads the header.php template. ?>

<div id="contact-us" class="section section-content section-contact-us">
  <div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Contact Form</h2>
                    <?php echo do_shortcode('[formidable id=2]'); ?>
                </div>
                <div class="col-sm-6">
                    <div class="contact-details">
                        <h2>Contact Details</h2>
                        <ul class="contact">

                            <?php if ( get_field('address') ): ?>
                                <li><i class="fa fa-home" aria-hidden="true"></i> <span><?php the_field('address'); ?></span></li>
                            <?php else: ?>
                                <li><i class="fa fa-home" aria-hidden="true"></i> <span>Suite 522, St Kilda Road Towers<br>
          1 Queens Road, Melbourne<br>
          Victoria 3004</span></li>
                            <?php endif; ?>

                            <?php if ( get_field('phone') ): ?>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <span><?php the_field('phone'); ?></span></li>
                            <?php endif; ?>

                            <?php if ( get_field('email') ): ?>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <span><?php the_field('email'); ?></span></li>
                            <?php endif; ?>

                            <?php if ( get_field('address') ): ?>
                                <li>
                                    <div class="map-holder">
                                        <div id="map-canvas" data-title="<?php $address = get_field('address'); $address = preg_replace( "/\r|\n/", "", $address); echo strip_tags($address); ?>" style="width:420px;height:275px;"></div>
                                    </div>
                                </li>
                            <?php else: ?>
                                <li>
                                    <div class="map-holder">
                                        <div id="map-canvas" data-lat="-37.835768" data-lng="144.973876" data-title="Suite 522, St Kilda Road Towers 1 Queens Road, Melbourne Victoria 3004" style="width:420px;height:275px;"></div>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if ( get_field('link') ): ?>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="<?php the_field('link'); ?>" target="_blank"><span>Get Directions</span></a></li>
                            <?php else: ?>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <a href="//goo.gl/kia3R2" target="_blank"><span>Get Directions</span></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>