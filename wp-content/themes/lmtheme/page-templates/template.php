<?php
/**
 * Template Name: Page Templates
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

<div class="section">
  <div class="container">
    <div class="row py3">
        <div class="col-sm-12"><?php the_content(); ?></div>
    </div>
  </div>
</div>

<div class="section section-call2action2">
    <div class="container">
        <div class="row py4">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="inline-block mr3">Free to Sign Up. No Obligation to Borrow</h3>
                <a href="/contact-us" class="btn btn-white-v2 btn-white-v2ext">Apply Now</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>