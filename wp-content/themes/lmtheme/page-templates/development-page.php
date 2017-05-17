<?php
/**
 * Template Name: Development
 */

get_header(); // Loads the header.php template. ?>

<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro animatedParent" data-sequence="500">
        <h2 class="h1 animated growIn go" data-id="1">
          <?php echo get_the_title(); ?>
        </h2>
      </div>
    </div>
    <?php if ( has_post_thumbnail() ) : $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="masterhead-img" style="background-image: url('<?php echo $post_image[0]; ?>');">
    </div>
    <?php else: ?>
    <div class="masterhead-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-services.jpg');">
    </div>
    <?php endif; ?>
    <div class="masterhead-accent">
      <img class="accent accent1 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-1.png" alt="">
      <img class="accent accent2 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-2.png" alt="">
      <img class="accent accent3 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-3.png" alt="">
    </div>
  </div>
</div>

<?php if ( get_field('development_description_left') && get_field('development_description_right')): ?>
<div id="development-intro" class="section section-padded section-services-intro">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-5 animated fadeInLeft">
        <p class="about-info"><?php the_field('development_description_left'); ?></p>
      </div>
      <div class="col-sm-7 animated fadeInRight">
        <p><?php the_field('development_description_left'); ?></p>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if( have_rows('tabs') ): $rowctr = 1; ?>
<div class="section section-padded section-services-xp">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-xs-2 tabs animated fadeInLeft">
        <div class="service-tab">
          <a href="#" id="tab-team"><i class="icon-team"></i></a>
          <h3>Team</h3>
        </div>
        <div class="service-tab">
          <a href="#" id="tab-feasibility"><i class="icon-feasibility"></i></a>
          <h3>Feasibility</h3>
        </div>
        <div class="service-tab">
          <a href="#" id="tab-selection"><i class="icon-selection"></i></a>
          <h3>Selection</h3>
        </div>
        <div class="service-tab">
          <a href="#" id="tab-planning"><i class="icon-planning"></i></a>
          <h3>Planning</h3>
        </div>
        <div class="service-tab">
          <a href="#" id="tab-funding"><i class="icon-funding"></i></a>
          <h3>Funding</h3>
        </div>
        <div class="service-tab">
          <a href="#" id="tab-development"><i class="icon-development"></i></a>
          <h3>Development</h3>
        </div>
      </div>
      <div class="col-xs-10 animated fadeInRight">
        <?php while( have_rows('tabs') ): the_row(); ?>
        <div class="row" id="tab-<?php the_sub_field('icon'); ?>-row">
          <h3 class="section-title center"><?php the_sub_field('title'); ?></h3>
          <?php the_sub_field('description'); ?>
        </div>
        <?php $rowctr++; endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if ( get_field('development_footer') ): ?>
<div id="services-detail" class="section section-padded section-services-detail">
  <div class="container">
    <div class="row animatedParent">
      <div class="col-sm-8 col-sm-offset-2 center animated fadeInDownShort">
        <p><?php echo the_field('development_footer'); ?></p>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); // Loads the footer.php template. ?>