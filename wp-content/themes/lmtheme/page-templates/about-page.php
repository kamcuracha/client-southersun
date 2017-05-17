<?php
/**
 * Template Name: About Us
 */

get_header(); // Loads the header.php template. ?>

<div id="top"  class="masterhead">
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
  <div class="masterhead-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-about.jpg');">
  </div>
  <?php endif; ?>
  <div class="masterhead-accent">
    <img class="accent accent1 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-1.png" alt="">
    <img class="accent accent2 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-2.png" alt="">
    <img class="accent accent3 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-3.png" alt="">
  </div>
</div>

<div class="section section-about-team">
  <div class="section-heading about-team copy animatedParent">
    <h3 class="section-title animated fadeInDownShort">Meet the Team</h3>
    
    <?php if ( get_field('meet_the_team') ): ?>
    <p class="animated fadeInDownShort go" data-id="3"><?php echo the_field('meet_the_team'); ?></p>
    <?php endif; ?>
  </div>
  
  <?php if( have_rows('team_members') ): $rowctr = 1; ?>
  <div class="container">
    <div class="row owl-carousel owl-theme animatedParent">

      <?php while( have_rows('team_members') ): the_row(); ?>
      <div class="item animated fadeIn go" data-id="<?php echo $rowctr; ?>">
        <div class="team-member">
          <div class="member-img">
            <?php if ( get_sub_field('image') ) : ?>
            <img src="<?php the_sub_field('image'); ?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-member<?php echo $rowctr; ?>.jpg" alt="">
            <?php endif; ?>
          </div>
          <div class="member-name"><?php the_sub_field('name'); ?></div>
          <div class="member-pos"><?php the_sub_field('title'); ?></div>
        </div>
      </div>
      <?php $rowctr++; endwhile; ?>
    </div>
  </div>
  <?php endif; ?>

</div>

<div id="about-intro" class="section section-about-intro">
  <div class="container">
    <?php if ( get_field('about_description_left') && get_field('about_description_right')): ?>
    <div class="row animatedParent">
      <div class="col-sm-5 animated fadeInLeft">
        <p class="about-info"><?php the_field('about_description_left'); ?></p>
      </div>
      <div class="col-sm-7 animated fadeInRight">
        <p><?php the_field('about_description_right'); ?></p>
      </div>
    </div>
    <?php endif; ?>

    <div class="row animated">
      <div class="col-sm-6 col-sm-offset-3 tabs center animated fadeIn go">
        <div class="about-tab">
          <a href="#" id="tab-vision"><i class="icon-vision"></i></a>
          <h3>Our Vision</h3>
        </div>
        <div class="about-tab">
          <a href="#" id="tab-values"><i class="icon-values"></i></a>
          <h3>Our Values</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if( have_rows('tabs') ): $rowctr = 1; ?>
<div class="section section-about-vm">
  <div class="container">
    <?php while( have_rows('tabs') ): the_row(); ?>
    <div class="row animatedParent" id="tab-<?php the_sub_field('icon'); ?>-row">
      <div class="col-sm-12">
        <h3 class="section-title center"><?php the_sub_field('title'); ?></h3>
        <p class="center"><?php the_sub_field('description'); ?></p>
      </div>
    </div>
    <?php $rowctr++; endwhile; ?>
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-about-vision.jpg" alt="">
  </div>
</div>
<?php endif; ?>

<?php get_footer(); // Loads the footer.php template. ?>