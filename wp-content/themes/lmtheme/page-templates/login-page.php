<?php
/**
 * Template Name: Login Page
 */

get_header(); // Loads the header.php template. ?>

<div class="section section-content">
    <div class="container">
        <div class="row py4 my3">
            <div class="col-sm-12 col-md-8 col-md-offset-2"><?php echo apply_filters('the_content', $post->post_content); ?></div>
        </div>
    </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>