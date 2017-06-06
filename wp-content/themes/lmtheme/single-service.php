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
<?php if ( get_field('service_pre_content') ): ?>
<div class="section section-pre-content bg-lgray <?php echo ( get_field('section_featurette') ) ? 'feature-link' : ''; ?>">
    <div class="container">
        <div class="section-heading pt4 mb3">
            <?php echo get_field('service_pre_content'); ?>
        </div>
        <?php if ( get_field('section_featurette') ): ?>
        <div class="row center">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="featurette pt2 pb4">
                    <?php echo get_field('section_featurette'); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<div class="section section-single-service">
    <div class="container">
        <div class="row py4 my3">
            <div class="col-sm-12 accordion"><?php echo apply_filters('the_content', $post->post_content); ?></div>
<!--            <div class="col-sm-4">-->
<!--                <div class="styled-form">-->
<!--                    <h3>Ready to get started?</h3>-->
<!--                    --><?php //echo do_shortcode('[formidable id=3]'); ?>
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>

<?php
global $post;
$pageid = $post->ID;

$args = array(
    'posts_per_page' => 4,
    'post_type' => 'service'
);
$services = new WP_Query($args);

if ($services->have_posts()):
?>
<div class="section section-services section-services-ext bg-lgray">
    <div class="container">
        <div class="row py4">
            <?php while($services->have_posts()): $services->the_post(); ?>
                <div class="col-sm-6 col-md-3 mb3">
                    <div class="service <?php echo ($pageid == get_the_ID())? 'service-active ': '';?>text-center p3">
                        <div class="icon-service py2">
                            <?php if ( get_field('service_icon') ): ?>
                                <i class="icon icon-<?php echo get_field('service_icon'); ?>"></i>
                            <?php else: ?>
                                <i class="icon icon-personal-finance"></i>
                            <?php endif; ?>
                        </div>
                        <h4 class="py2"><?php the_title(); ?></h4>
                        <a class="service-link" href="<?php the_permalink(); ?>">
                            <span class="arrow-right"></span>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; wp_reset_query(); ?>

<?php if ( get_field('call2action_text') ): ?>
    <div class="section section-call2action2">
        <div class="container">
            <div class="row py4">
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