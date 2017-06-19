<?php
/**
 * Template Name: Homepage
 */

get_header(); // Loads the header.php template. ?>

<div class="section section-content section-masterhead masterhead-home">
    <div class="container animatedParent">
        <div class="masterhead-body-left animated fadeIn">
            <h1 class="masterhead-title">
                <?php echo get_field('banner_title'); ?>
            </h1>
            <?php if(get_field('banner_body')) : ?>
            <p><?php echo get_field('banner_body'); ?></p>
            <?php endif; ?>
            <?php if( have_rows('banner_button') ): $rowctr = 1; ?>
                <?php while( have_rows('banner_button') ):
                    the_row();
                    $addclass = get_sub_field('button_class'); ?>

                    <?php if($rowctr == 1):
                        $addclass = get_sub_field('button_class')." mr3";
                    endif; ?>

                    <?php if($addclass == 'btn-white-v2ext'):
                        $addclass = $addclass." btn-white-v2"; ?>
                        <a href="<?php echo the_sub_field('link'); ?>" class="btn <?php echo $addclass; ?>"><?php the_sub_field('text'); ?></a>
                    <?php endif; ?>

                <?php $rowctr++; endwhile; ?>
            <?php endif; ?>
        </div>
<!--        --><?php //if( get_field('title', 'option') ): ?>
<!--        <div class="masterhead-body-right center animated fadeIn">-->
<!--            <h3>--><?php //echo get_field('title', 'option'); ?><!--</h3>-->
<!--            <p>-->
<!--                --><?php //echo (get_field('body', 'option')) ? get_field('body', 'option') : ''; ?>
<!--                --><?php //echo (get_field('hightlight_sub', 'option')) ? '<span class="highlight">'.get_field('hightlight_sub', 'option').'</span>' : ''; ?>
<!--                --><?php //echo (get_field('hightlight_main', 'option')) ? '<span class="highlight2">'.get_field('hightlight_main', 'option').'</span>' : ''; ?>
<!--            </p>-->
<!--        </div>-->
<!--        --><?php //endif; ?>
    </div>
</div>

<div class="section section-partners bg-lgray <?php echo ( get_field('featurette') ) ? 'feature-link' : ''; ?>">
    <div class="container animatedParent">
        <div class="section-heading pt4 animated fadeInDownShort">
            <h3>Our Finance Partners</h3>
        </div>
        <div class="row pt3 pb4 center animated fadeInUpShort">
            <div class="col-sm-3 col-md-2 col-md-offset-2">
                <div class="partner">
                    <div class="partner-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-parters-fbaa.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="rating">
                        <span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star half"></span>
                    </div>
                    <p class="rating-reviews">1,014 Reviews</p>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="partner">
                    <div class="partner-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-parters-westpac.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="rating">
                        <span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star half"></span>
                    </div>
                    <p class="rating-reviews">558 Reviews</p>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="partner">
                    <div class="partner-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-parters-ssf.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="rating">
                        <span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star"></span>
                    </div>
                    <p class="rating-reviews">1,321 Reviews</p>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="partner">
                    <div class="partner-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-parters-suncorp.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="rating">
                        <span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star half"></span>
                    </div>
                    <p class="rating-reviews">131 Reviews</p>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <a class="more-link" href="/partners">and more...</a>
            </div>
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

<div class="section section-home-about">
    <div class="container animatedParent">
        <?php if(get_field('about_title')): ?>
        <div class="section-heading pt4">
            <h3 class="animated fadeInDownShort"><?php echo get_field('about_title'); ?></h3>
            <?php if(get_field('about_desc')): ?>
            <p class="py2 animated fadeInUpShort"><?php echo get_field('about_desc'); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if( have_rows('about_qualities') ): $rowctr = 1; ?>
        <div class="row pt3 pb4">
            <?php $sequence = 0; $dataid = 0; while( have_rows('about_qualities') ): the_row(); ?>
            <div class="col-sm-6 col-md-3 mb3 animated fadeIn" data-id="<?php echo $dataid+=1; ?>" data-sequence="<?php echo $sequence+=300; ?>">
                <div class="home-about text-center p3">
                    <div class="icon-home-about py2">
                        <i class="icon icon-<?php the_sub_field('icon'); ?>"></i>
                    </div>
                    <h4 class="py2"><?php the_sub_field('title'); ?></h4>
                    <p><?php the_sub_field('body'); ?></p>
                </div>
            </div>
            <?php $rowctr++; endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php if ( get_field('call2action_text') ): ?>
<div class="section section-call2action">
    <div class="container animatedParent">
        <div class="row py4 animated fadeInRight">
            <div class="col-sm-4">
                <h3><?php echo get_field('call2action_text'); ?></h3>
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

<?php
$args = array(
    'posts_per_page' => 4,
    'post_type' => 'service'
);
$services = new WP_Query($args);

if ($services->have_posts()):
?>
<div class="section section-services bg-lgray">
    <div class="container animatedParent">
        <div class="section-heading pt4">
        <?php
        $args_page = array(
            'posts_per_page' => 1,
            'post_type' => 'page',
            'post_title_like' => 'Services'
        );
        $lands = new WP_Query($args_page);

        if ($lands->have_posts()): $lands->the_post();
        ?>
            <h3 class="animated fadeInDownShort"><?php the_title(); ?></h3>
            <p class="py2 animated fadeInUpShort"><?php echo strip_tags(limit_string(get_the_content(), 160)); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-green mt0 mx2 py2 animated fadeInUpShort">Find out more</a>
        <?php endif; wp_reset_query(); ?>
        </div>
        <div class="row py4">
            <?php $sequence = 0; $dataid = 0; while($services->have_posts()): $services->the_post(); ?>
            <div class="col-sm-6 col-md-3 mb3 animated fadeIn" data-id="<?php echo $dataid+=1; ?>" data-sequence="<?php echo $sequence+=300; ?>">
                <div class="service text-center p3">
                    <div class="icon-service py2">
                        <?php if ( get_field('service_icon') ): ?>
                        <i class="icon icon-<?php echo get_field('service_icon'); ?>"></i>
                        <?php else: ?>
                        <i class="icon icon-personal-finance"></i>
                        <?php endif; ?>
                    </div>
                    <h4 class="py2"><?php the_title(); ?></h4>
                    <?php if ( get_field('service_desc') ): ?>
                    <p><?php echo get_field('service_desc'); ?></p>
                    <?php else: ?>
                    <p><?php echo strip_tags(limit_string(get_the_content(), 54)); ?></p>
                    <?php endif; ?>
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

<div class="section section-review">
    <div class="container animatedParent">
        <div class="section-heading half pt4">
            <h3 class="animated fadeInDownShort">Answer Financial Customer Reviews</h3>
            <div class="rating animated fadeInUpShort">
                <span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star full"></span><span class="star half"></span>
            </div>
            <a class="rating-link animated fadeInUpShort" href="/reviews">6,714 Reviews</a>
            <p class="rating-desc py2 animated fadeInUpShort">99% of our reviewers recommend Answer Financial</p>
        </div>
        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'review'
        );
        $reviews = new WP_Query($args);

        if ($reviews->have_posts()):
        ?>
        <div class="row">
            <div class="col-sm-5 col-md-3 col-md-offset-1 hidden-xs animated fadeIn">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-review1.png" alt="">
            </div>
            <div class="col-sm-7 col-md-7 animated fadeIn">
                <div class="owl-carousel">
                    <?php while($reviews->have_posts()): $reviews->the_post(); ?>
                    <div class="item">
                        <blockquote>
                            <div class="review-details">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo strip_tags(limit_string(get_the_content(), 200)); ?></p>
                                <div class="review-by">— <?php echo get_field('buyer'); ?>. <?php echo (get_field('location')) ? get_field('location') : ''; ?></div>
                                <div class="review-title"><?php echo get_field('purchase_desc'); ?></div>
                            </div>
                        </blockquote>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <?php endif; wp_reset_query(); ?>
    </div>
</div>

<!--<div class="section section-review">-->
<!--    <div class="container">-->
<!--        <div class="section-heading pt4">-->
<!--            <h3>Testimonials</h3>-->
<!--        </div>-->
<!--        <div class="row pt2 pb4 center">-->
<!--            <div class="col-sm-10 col-sm-offset-1">-->
<!--                <div class="owl-carousel">-->
<!--                    <div class="item">-->
<!--                        <blockquote>-->
<!--                            <div class="review-details">-->
<!--                                <h3>1Saved money... Agent was exceptional!</h3>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                                <div class="review-user">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img-review-user.png" alt="" class="center-block">-->
<!--                                </div>-->
<!--                                <div class="review-by">John Doe. Victoria</div>-->
<!--<!--                                <div class="review-title">Purchased Home Insurance and reported savings of $600</div>-->
<!--                            </div>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <blockquote>-->
<!--                            <div class="review-details">-->
<!--                                <h3>2Saved money... Agent was exceptional!</h3>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                                <div class="review-by">John Doe. Victoria</div>-->
<!--<!--                                <div class="review-title">Purchased Home Insurance and reported savings of $600</div>-->
<!--                            </div>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <blockquote>-->
<!--                            <div class="review-details">-->
<!--                                <h3>3Saved money... Agent was exceptional!</h3>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
<!--                                <div class="review-by">John Doe. Victoria</div>-->
<!--<!--                                <div class="review-title">Purchased Home Insurance and reported savings of $600</div>-->
<!--                            </div>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php if ( get_field('call2action2_text') ): ?>
<div class="section section-call2action2">
	<div class="container animatedParent">
		<div class="row py4 center animated fadeInDownShort">
			<h3><?php echo get_field('call2action2_text'); ?></h3>
            <?php echo (get_field('call2action2_subtext')) ? '<p>'.get_field('call2action2_subtext').'</p>' : ''; ?>
            <?php if(get_field('call2action2_button_class')): ?>
                <?php $addclass = get_field('call2action2_button_class'); if($addclass == 'btn-white-v2ext'):
                    $addclass = "btn-white-v2";
                endif; ?>
                <a href="<?php echo (get_field('call2action2_button_link')) ? get_field('call2action2_button_link') : '/'; ?>" class="btn <?php echo $addclass; ?>"><?php echo (get_field('call2action2_button_text')) ? get_field('call2action2_button_text') : 'Get Started'; ?></a>
            <?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php if(get_field('pre_footer_title')) : ?>
<div class="section section-b2c">
    <div class="container animatedParent">
        <div class="row py4 center animated fadeIn">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                <h3><?php echo get_field('pre_footer_title'); ?></h3>
                <?php if(get_field('pre_footer_body')): ?>
                    <?php echo get_field('pre_footer_body'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); // Loads the footer.php template. ?>