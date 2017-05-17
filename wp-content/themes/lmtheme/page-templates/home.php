<?php
/**
 * Template Name: Homepage
 */

get_header(); // Loads the header.php template. ?>


<div class="anchor-links-v2">
  <a itemprop="relatedLink" class="current" href="#post-masterhead">
    <i class="icon icon-home"></i>
  </a>
  <a itemprop="relatedLink" href="#qualities">
    <i class="icon icon-graph"></i>
  </a>
  <a itemprop="relatedLink" href="#projects">
    <i class="icon icon-hands"></i>
  </a>
  <a itemprop="relatedLink" href="#latest">
    <i class="icon icon-person"></i>
  </a>
</div>


<div id="top" class="section section-vshape-bottom">
  <div class="masterhead">
    <div class="container">
      <div class="masterhead-intro animatedParent" data-sequence="500">
        <div class="animated growIn go" data-id="1">
          <div class="h2 white">Welcome to</div>
          <div class="h1"><?php echo get_bloginfo('name'); ?></div>
        </div>
      </div>
    </div>
    <?php if ( has_post_thumbnail() ) : $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="masterhead-img" style="background-image: url('<?php echo $post_image[0]; ?>');">
    </div>
    <?php else: ?>
    <div class="masterhead-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-main.jpg');">
    </div>
    <?php endif; ?>
    <div class="masterhead-accent">
      <img class="accent accent1 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-1.png" alt="">
      <img class="accent accent2 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-2.png" alt="">
      <img class="accent accent3 move-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-banner-accent-3.png" alt="">
    </div>
  </div>
</div>

<?php if ( get_field('post_masterhead') ): ?>
<div id="post-masterhead" class="section section-post-masterhead">
  <div class="container">
    <div class="section-heading copy animatedParent">
      <p class="animated fadeInDownShort go" data-id="3"><?php echo the_field('post_masterhead'); ?></p>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if ( get_field('key_qualities') ): ?>
<div id="pre-qualities" class="section section-pre-qualities">
  <div class="container">
    <div class="section-heading p0 copy animatedParent">
      <h3 class="section-title white animated fadeInDownShort">Key Qualities</h3>

      <p class="animated fadeInUpShort"><?php echo the_field('key_qualities'); ?></p>
    </div>
  </div>
  <div class="arrow-up">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-main-prime-urban.png" alt="">
  </div> 
</div>
<?php endif; ?>

<div id="qualities" class="section section-vshape-bottom section-qualities overflow-hidden">

  <div class="features light-green animatedParent">
    <div class="features-holder">
      
      <?php if( have_rows('qualities') ): $rowctr = 1; ?>

        <?php while( have_rows('qualities') ): the_row(); ?>
          
        <div class="features-item <?php if($rowctr > 3) { echo "features-item-right"; } ?> features-item-<?php echo $rowctr; ?> animated <?php if($rowctr > 3) { echo "bounceInRight"; } else { echo "bounceInLeft"; } ?>" data-color="light-green" data-id="<?php echo $rowctr; ?>">

          <div class="features-item-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-key-<?php echo $rowctr; ?>.png" alt="">
          </div>

          <div class="features-item-body">
            <h3><?php the_sub_field('quality'); ?></h3>
            <p><?php the_sub_field('description'); ?></p>
          </div>
        </div>

        <?php $rowctr++; endwhile; ?>

      <?php endif; ?>

      <img class="features-holder-img black" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-guaranteed-black.png" alt="">
      <img class="features-holder-img blue" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-guaranteed-blue.png" alt="">
      <img class="features-holder-img light-green" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-guaranteed-lgreen.png" alt="">
      <img class="features-holder-img green" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-guaranteed-green.png" alt="">
      <img class="features-holder-img orange" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-guaranteed-orange.png" alt="">
      <img class="features-holder-img yellow" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-guaranteed-yellow.png" alt="">
    </div>
  </div>
</div>

<div id="projects" class="section section-projects">
  <div class="section-heading half copy copy-inverted animatedParent">
    <h3 id="comparison" class="section-title animated fadeInDownShort">Featured Projects</h3>
    
    <?php if ( get_field('featured_projects') ): ?>
    <p class="animated fadeInUpShort"><?php echo the_field('featured_projects'); ?></p>
    <?php endif; ?>
  </div>

  <?php
    $args = array(
      'posts_per_page' => 3,
      'post_type' => 'projects',
      'meta_key' => 'meta-checkbox',
      'meta_value' => 'yes'
    );
    $featured = new WP_Query($args);

    if ($featured->have_posts()):
  ?>
  <div class="container">
    <div class="cards card-holder owl-carousel animatedParent">
      <?php while($featured->have_posts()): $featured->the_post(); ?>
      <div class="card card-1 item animated fadeIn go" data-id="1">
        <a href="<?php the_permalink(); ?>">
          <div class="card-image">
            <?php if ( get_field('thumbnail_image') ) : ?>
                <img class="img-responsive" src="<?php echo the_field('thumbnail_image'); ?>" alt="">
            <?php else : ?>
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/no-thumbnail.jpg" alt="">
            <?php endif; ?>
          </div>
          <div class="card-title">
            <h4><?php the_title(); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></h4>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="card-link">
      <a itemprop="significantLink" href="/projects" class="btn btn-primary btn-blink  animated fadeInUpShort go">Find out more</a>
    </div>
  </div>
  <?php endif; ?>
</div>

<?php
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'news'
  );
  $news = new WP_Query($args);

  if ($news->have_posts()):
?>
<div id="latest" class="section section-latest animatedParent">
  <div class="container">

    <div class="section-heading copy animatedParent">
      <h3 id="comparison" class="section-title animated fadeInDownShort">Latest News</h3>
    </div>
    <div class="row animatedParent">
      <?php while($news->have_posts()): $news->the_post(); ?>
      <div class="col-sm-12 col-md-4 item animated fadeInUpShort" data-id="1">
        <header class="entry-header">
          <div class="post-date">
            <span class="posted"><?php $date = new DateTime($post->post_date); echo $date->format('d F Y'); ?></span>
            <hr align="left" width="10%">
          </div> 
        </header>
        <div class="entry-content">
          <h3 class="entry-title"><?php the_title(); ?></h3> 
          <span><?php echo strip_tags(limit_string(get_the_content(), 160)); ?></span>
         </div>
         <footer class="entry-footer">
           <a href="<?php the_permalink(); ?>">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
         </footer>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); // Loads the footer.php template. ?>