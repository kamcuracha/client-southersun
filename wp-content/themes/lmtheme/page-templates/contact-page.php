<?php
/**
 * Template Name: Contact Us
 */

get_header(); // Loads the header.php template. ?>
<?php if ( has_post_thumbnail() ) : $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="section section-content hero-bg" style="background-image: url('<?php echo $post_image[0]; ?>') !important;">
<?php else: ?>
<div class="section section-content hero-bg">
<?php endif; ?>
    <div class="hero-content center">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</div>

<div id="contact-us" class="section section-contact-us">
  <div class="container">
    <div class="row py3">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                <h2>We're here to help</h2>
                <p>Fill in your details and we’ll be in touch shortly.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?php echo do_shortcode('[formidable id=2]'); ?>
                </div>
                <div class="col-sm-6">
                    <div class="contact-details">
                        <h2></h2>
                        <ul class="contact">

                            <?php if ( get_field('phone') ): ?>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <span><?php the_field('phone'); ?></span></li>
                            <?php endif; ?>

                            <?php if ( get_field('fax') ): ?>
                                <li><i class="fa fa-fax" aria-hidden="true"></i> <span><?php the_field('fax'); ?></span></li>
                            <?php endif; ?>

                            <?php if ( get_field('email') ): ?>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <span><?php the_field('email'); ?></span></li>
                            <?php endif; ?>

                            <?php if ( get_field('address') ): ?>
                                <li><i class="fa fa-home" aria-hidden="true"></i> <span><?php the_field('address'); ?></span></li>
                            <?php else: ?>
                                <li><i class="fa fa-home" aria-hidden="true"></i> <span>Suite 522, St Kilda Road Towers<br>
          1 Queens Road, Melbourne<br>
          Victoria 3004</span></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="section section-call2action2">
    <div class="container">
        <div class="row py4">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="inline-block mr3">Free to Sign Up. No Obligation to Borrow</h3>
                <a href="/wp-login.php?action=register" class="btn btn-white-v2 btn-white-v2ext">Apply Now</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>