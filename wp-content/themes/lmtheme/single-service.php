<?php
/**
 * Template Name: Single Service
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
<div class="section bg-lgray">
    <div class="container">
        <div class="section-heading pt4">
            <h3><?php echo get_the_title(); ?></h3>
            <p class="py2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<div class="section section-single-service">
    <div class="container">
        <div class="row py4 my3">
            <div class="col-sm-8"><?php echo apply_filters('the_content', $post->post_content); ?></div>
            <div class="col-sm-4">
                <div class="styled-form">
                    <h3>Ready to get started?</h3>
                    <?php echo do_shortcode('[formidable id=3]'); ?>
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