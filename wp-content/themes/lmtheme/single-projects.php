<?php
/**
 * Template Name: Single Projects
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro masterhead-intro-front animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          <?php echo get_the_title(); ?>
        </h2>
      </div>
    </div>
    <?php if ( has_post_thumbnail() ) : $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="masterhead-img" style="background-image: url('<?php echo $post_image[0]; ?>');">
    </div>
    <?php else: ?>
    <div class="masterhead-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-projects.jpg');">
    </div>
    <?php endif; ?>
    <div class="masterhead-accent">
      <img class="accent accent1 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-1.png" alt="">
      <img class="accent accent2 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-2.png" alt="">
      <img class="accent accent3 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-3.png" alt="">
    </div>
  </div>
</div>

<?php

$term = wp_get_post_terms($post->ID, 'project_category');
if($term[0]->parent != 0)
    $parent = get_term($term[0]->parent, get_query_var('taxonomy') );
?>

<main <?php hybrid_attr( 'content' ); ?>>

<?php if ( have_posts() ) : // Checks if any posts were found. ?>

    <?php while ( have_posts() ) : // Begins the loop through found posts. ?>

        <?php the_post(); // Loads the post data. ?>

        <div id="projects-all" class="section section-padded section-project-single">
            <div class="section-heading animatedParent">
                <h3 class="section-title animated fadeInDownShort go"><?php the_title(); ?></h3>
                <p class="animated fadeInUpShort go"><?php $content = get_the_content(); echo $content; ?></p>
            </div>
            <div class="container">
                <?php if ( get_field('hero_image') ) : ?>
                    <img class="img-responsive post-thumb" src="<?php echo the_field('hero_image'); ?>" alt="">
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-6 animated fadeInLeftShort go">
                        <?php the_field('info_1st_column'); ?>
                    </div>
                    <div class="col-sm-6 animated fadeInRightShort go">
                        <?php the_field('info_2nd_column'); ?>
                    </div>
                </div>
                <?php if ( (get_field('info_image') && get_field('info_image_2')) || (get_field('info_image_3') && get_field('info_image_4'))) : ?>
                <div class="row row-images">
                    <?php if ( get_field('info_image') && get_field('info_image_2')) : ?>
                    <div class="col-sm-7">
                        <img class="img-responsive" src="<?php the_field('info_image'); ?>" alt="">
                    </div>
                    <div class="col-sm-5">
                        <img class="img-responsive" src="<?php the_field('info_image_2'); ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <?php if ( get_field('info_image_3') && get_field('info_image_4')) : ?>
                    <div class="col-sm-5">
                        <img class="img-responsive" src="<?php the_field('info_image_3'); ?>" alt="">
                    </div>
                    <div class="col-sm-7">
                        <img class="img-responsive" src="<?php the_field('info_image_4'); ?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 animated fadeInDownShort go">
                        <?php the_field('info_footer'); ?>
                    </div>
                </div>
            </div>
        </div>


    <?php endwhile; // End found posts loop. ?>

<?php endif; // End check for posts. ?>

</main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>