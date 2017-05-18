<?php
/**
 * Template Name: Homepage
 */

get_header(); // Loads the header.php template. ?>

<!--<div id="top" class="section section-vshape-bottom">-->
<!--  <div class="masterhead">-->
<!--    <div class="container">-->
<!--      <div class="masterhead-intro animatedParent" data-sequence="500">-->
<!--        <div class="animated growIn go" data-id="1">-->
<!--          <div class="h2 white">Welcome to</div>-->
<!--          <div class="h1">--><?php //echo get_bloginfo('name'); ?><!--</div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    --><?php //if ( has_post_thumbnail() ) : $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<!--    <div class="masterhead-img" style="background-image: url('--><?php //echo $post_image[0]; ?>
<?php //else: ?>
<!--    <div class="masterhead-img" style="background-image: url('--><?php //echo get_template_directory_uri(); ?>
<?php //endif; ?>
<!--    <div class="masterhead-accent">-->
<!--      <img class="accent accent1 move-right" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/bg-banner-accent-1.png" alt="">-->
<!--      <img class="accent accent2 move-right" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/bg-banner-accent-2.png" alt="">-->
<!--      <img class="accent accent3 move-right" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/bg-banner-accent-3.png" alt="">-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!-- <?php if ( get_field('post_masterhead') ): ?>
<div id="post-masterhead" class="section section-post-masterhead">
  <div class="container">
    <div class="section-heading copy animatedParent">
      <p class="animated fadeInDownShort go" data-id="3"><?php echo the_field('post_masterhead'); ?></p>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if ( get_field('key_qualities') ): ?>
<div id="pre-qualities" class="section section-pre-qualities">
  <div class="container">
    <div class="section-heading p0 copy animatedParent">
      <h3 class="section-title white animated fadeInDownShort">Key Qualities</h3>

      <p class="animated fadeInUpShort"><?php echo the_field('key_qualities'); ?></p>
    </div>
  </div>
  <div class="arrow-up">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-main-prime-urban.png" alt="">
  </div> 
</div>
<?php endif; ?> -->

<div class="section section-services">
    <div class="container">
        <div class="section-heading half pt4">
            <h3>Loans and Services</h3>
            <p class="py2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#" class="btn btn-green mt0 mx2">Find out more</a>
        </div>
        <div class="row py4">
            <div class="col-sm-3">1</div>
            <div class="col-sm-3">2</div>
            <div class="col-sm-3">3</div>
            <div class="col-sm-3">4</div>
        </div>
    </div>
</div>

<div class="section section-review">
    <div class="container">
        <div class="section-heading half pt4">
            <h3>Answer Financial Customer Reviews</h3>
            <div class="rating">
                <span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star half"></span>
            </div>
            <a class="rating-link" href="/reviews">6,714 Reviews</a>
            <p class="rating-desc py2">99% of our reviewers recommend Answer Financial</p>
        </div>
        <div class="row">
            <div class="col-sm-3 col-sm-offset-1">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-review1.png" alt="">
            </div>
            <div class="col-sm-7">
                <blockquote>
                    <div class="review-details">
                        <h3>Saved money... Agent was exceptional!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="review-by">— John Doe. Victoria</div>
                        <div class="review-title">Purchased Home Insurance and reported savings of $600</div>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<div class="section section-call2action2">
	<div class="container">
		<div class="row py4 center">
			<h3>Guiding you toward a truly successful financial future</h3>
            <p>Take the next steps with Southern Sun Finance</p>
            <a href="#" class="btn btn-white mx2">Talk to Us</a>
		</div>
	</div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>