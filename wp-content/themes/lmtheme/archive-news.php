<?php
/**
 * Template Name: Single News
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro masterhead-intro-front animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          News
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

<main <?php hybrid_attr( 'content' ); ?>>

<?php
    $args = array(
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'news'
    );
    $news = new WP_Query($args);

    if ( $news->have_posts() ) : // Checks if any posts were found. ?>

    <?php the_post(); // Loads the post data. ?>

    <div id="news-all" class="section section-padded section-news-single">
        <div class="container">
            <div class="section-heading animatedParent">
                <h3 class="section-title animated fadeInDownShort go"><?php the_title(); ?></h3>
                <hr align="center" width="15%">
                <div class="post-date"><?php $date = new DateTime($post->post_date); echo $date->format('d F Y'); ?>
                </div>
            </div>
            <div class="news-content animated fadeInUpShort go">
            <?php if ( get_field('main_image') ): ?>
            <img class="img-responsive" src="<?php echo the_field('main_image'); ?>" alt="">
            <?php endif; ?>
            <?php the_content(); ?></div>
            <div class="post-nav">
                <?php next_post_link( '%link', '<div class="alignleft prev-next-post-nav">Prev</div>' ) ?>
                <?php previous_post_link( '%link', '<div class="alignright prev-next-post-nav">Next</div>' ) ?>
            </div>
        </div>
    </div>

<?php endif; // End check for posts. ?>

</main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>