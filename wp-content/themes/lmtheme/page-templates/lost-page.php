<?php
/**
 * Template Name: Lost PW Page
 */

get_header(); // Loads the header.php template. ?>

<div class="section section-content section-login">
    <div class="container">
        <div class="row py4">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="text-left">
                    <h3>Lost password</h3>
                    <p>Please enter your username or email address. You will receive a link to create a new password via email..</p>
                </div>
                <div class="row my4 bordered">
                    <div class="col-xs-6 styled-form">
                        <?php echo apply_filters('the_content', $post->post_content); ?>
                    </div>
                    <div class="col-xs-6 py4">
                        <h4>Questions?</h4>
                        <p>We’re here to help answer your questions or take your application over the phone.</p>
                        <h3>1800 234 567</h3>
                        <a class="mail-link" href="#">Email Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>