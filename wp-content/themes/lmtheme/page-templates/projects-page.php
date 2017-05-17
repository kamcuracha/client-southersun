<?php
/**
 * Template Name: Projects
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

<div id="projects-all" class="section section-padded section-projects-all">
  <div class="container">
    <div class="card-filter">
      <ul>
        <li><a href="#" data-filter="*" class="active">All</a></li>
        <?php 
        $terms = get_terms("project_category"); 

        $count = count($terms);

        if ( $count > 0 ){  
          foreach ( $terms as $term ) {  
            echo "<li class='pl3'><a href='#' data-filter='.".$term->slug."'>" . $term->name . " Projects</a></li>\n";
          }
        } 
        ?>
      </ul>
    </div>
    <div class="cards card-holder animatedParent">
      <?php
        $paginated = false;
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
        $args = array(
          'posts_per_page' => 9, 
          'post_type' => 'projects',
          'paged' => $paged
        );
        query_posts($args); ?>
        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
          <?php
            $termsArray = get_the_terms( $post->ID, "project_category" );  

            $termsString = ""; 
            if($termsArray) {
              foreach ( $termsArray as $term ) { 
                $termsString .= $term->slug.' '; 
              }
            } else {
              $termsString == 'uncategorize';
            }
          ?>
          <div class="<?php echo $termsString; ?> card card-1 no-transition" data-id="1">
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
        <?php $paginated = true; ?>
        <?php else : ?>
          <?php $paginated = false; ?>
        <?php endif; ?>
    </div>
    <?php if ($paginated): ?>
      <?php wpbeginner_numeric_posts_page(); ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>