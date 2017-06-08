<?php
/**
 * Template Name: About Us
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

<?php if ( get_field('pre_content') ): ?>
<div class="section section-pre-content bg-lgray <?php echo ( get_field('featurette') ) ? 'feature-link' : ''; ?>">
    <div class="container">
        <div class="section-heading pt4 mb3">
            <?php echo get_field('pre_content'); ?>
        </div>
        <?php if ( get_field('featurette') ): ?>
            <div class="row center">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="featurette pt2 pb4">
                        <?php echo get_field('featurette'); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<div class="section section-about-us">
    <div class="container">
        <div class="row py4 my3">
            <div class="col-sm-6 col-md-8"><?php echo apply_filters('the_content', $post->post_content); ?></div>
            <div class="col-sm-6 col-md-4">
                <div class="styled-form">
                    <h3>Leave a message</h3>
                    <?php echo do_shortcode('[formidable id=2]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ( get_field('call2action_text') ): ?>
<div class="section section-call2action2">
    <div class="container animatedParent">
        <div class="row py4 animated fadeInDownShort">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="inline-block mr3"><?php echo get_field('call2action_text'); ?></h3>
                <?php if(get_field('call2action_button_class')): ?>
                <?php $addclass = get_field('call2action_button_class'); if($addclass == 'btn-white-v2ext'):
                    $addclass = $addclass." btn-white-v2";
                endif; ?>
                <a href="<?php echo (get_field('call2action_button_link')) ? get_field('call2action_button_link') : '/'; ?>" class="btn <?php echo $addclass; ?>"><?php echo (get_field('call2action_button_text')) ? get_field('call2action_button_text') : 'Get Started'; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); // Loads the footer.php template. ?>