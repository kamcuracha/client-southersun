<?php

get_header(); // Loads the header.php template. 

$term = wp_get_post_terms($post->ID, 'product_category');
if($term[0]->parent != 0)
    $parent = get_term($term[0]->parent, get_query_var('taxonomy') );
?>

<main <?php hybrid_attr( 'content' ); ?>>

<?php if ( have_posts() ) : // Checks if any posts were found. ?>

    <?php while ( have_posts() ) : // Begins the loop through found posts. ?>

        <?php the_post(); // Loads the post data. ?>


    <div class="banner">
        <div class="container">
            <div class="banner-intro">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <?php if(isset($parent)): ?>
                    <li><a href="<?php echo get_term_link($parent); ?>"><?php echo $parent->name; ?></a></li>
                <?php endif; ?>
                <li><a href="<?php echo get_term_link($term[0]); ?>"><?php echo $term[0]->name; ?></a></li>
                <li class="active"><?php the_title(); ?></li>
            </ol>

            <div class="content-holder content-holder-col">
                <div class="t-sidebar">
                    <?php if( get_field('product_price') ) : ?>
                        <div class="widget widget-price" data-title="<?php the_title(); ?>" data-price="<?php echo str_replace(",", "", get_field('product_price') ); ?>">
                            <span class="label label-block">$<?php the_field('product_price'); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if( have_rows('pricing') ): ?>
                        <div class="widget widget-qty">
                            <h3 class="widget-title">Pricing</h3>
                            <div class="widget-body">
                                <ul class="qty-holder">
                                    <?php $pricename = 0; while ( have_rows('pricing') ) : the_row(); $pricename++; ?>
                                        <li>
                                            <div class="row">

                                                <div class="col-sm-7">
                                                    <h4 class="qty-title"><?php the_sub_field('pricing_title'); ?> <span class="text-right">$<?php the_sub_field('pricing_price'); ?></span></h4>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="qty-field">
                                                        <input type='button' value='-' class='qtyminus' field='quantity<?php echo $pricename; ?>' />
                                                        <input type='number' name='quantity<?php echo $pricename; ?>' value='0' class='qty' data-title="<?php the_sub_field('pricing_title'); ?>" data-price="<?php echo str_replace(",", "", get_sub_field('pricing_price')); ?>"/>
                                                        <input type='button' value='+' class='qtyplus' field='quantity<?php echo $pricename; ?>' />
                                                    </div>
                                                </div>

                                            </div>

                                        </li>
                                    <?php endwhile; ?>
                                </ul>

                                <div class="row">
                                    <div class="col-sm-6"><h4 class="qty-title">TOTAL</h4></div>
                                    <div class="col-sm-6 text-right"><h4 data-total="<?php echo str_replace(",", "", get_field('product_price') ); ?>" class="qty-title pricing-total">$<?php the_field('product_price'); ?></h4></div>
                                </div>

                                <a href="/finance/" class="btn btn-primary btn-block click_for_finance">Click here for Finance</a>

                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( have_rows('downloads') ): ?>
                        <div class="widget widget-download">
                            <h3 class="widget-title">Downloads</h3>
                            <div class="widget-body">

                                <ul class="list-download">
                                    <?php while ( have_rows('downloads') ) : the_row(); ?>
                                        <li><?php

                                            $file = get_sub_field('download_pdf');

                                            if( $file ): ?>
                                                <span><?php echo $file['filename']; ?></span>
                                                <a href="<?php echo $file['url']; ?>" target="_blank">Download <span class="fa fa-caret"></span></a>
                                            <?php endif; ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="t-content">

                    <div class="t-conten-inner">


                        <?php if( have_rows('product_gallery') ): ?>

                            <div id="galleria">


                                <?php

                                echo the_field('gallery_type');;
                                $count = -1;
                                while ( have_rows('product_gallery') ) : the_row();
                                    $count ++;

                                    if (get_sub_field('gallery_type') == 'Image') {

                                        $image = get_sub_field('p_gallery_image');
                                        $url =  $image['url'];
                                        $title = $image['title'];
                                        $alt = $image['alt'];
                                        $caption = $image['caption'];

                                        // thumbnail
                                        $size = 'thumbnail';
                                        $thumb = $image['sizes'][$size];
                                        $width = $image['sizes'][$size . '-width'];
                                        $height = $image['sizes'][$size . '-height'];  ?>

                                        <a href="<?php echo $url; ?>">
                                            <img
                                                src="<?php echo $thumb; ?>"
                                                data-title="<?php echo $alt; ?>"
                                                data-description="<?php echo $caption; ?>"
                                            >
                                        </a>

                                    <?php } elseif(get_sub_field('gallery_type') == 'Video')  { ?>
                                        <a href="<?php the_sub_field('gallery_video') ?>">
                                            <?php $video_link= get_sub_field('gallery_video'); ?>
                                            <img src="http://img.youtube.com/vi/<?php echo get_youtube_id_from_url($video_link); ?>/0.jpg" alt="">
                                        </a>
                                    <?php } ?>

                                <?php endwhile; ?>
                            </div>

                        <?php endif; ?>



                        <div class="tab-content-product">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="copy">
                                        <h2><?php the_title(); ?></h2>
                                        <h4><?php the_field('sub_title'); ?></h4>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="specifications">
                                    <h2><?php the_field('speci_title'); ?></h2>
                                    <h4><?php the_field('speci_date'); ?></h4>
                                    <?php the_field('speci_desc'); ?>
                                    <p></p>
                                    <br>
                                    <?php if( have_rows('specification') ): ?>
                                        <?php while ( have_rows('specification') ) : the_row(); ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><?php the_sub_field('specifi_i_title'); ?></h3>
                                                </div>
                                                <?php if( have_rows('speci_info_r') ): ?>
                                                    <table class="table table-stripped">
                                                        <?php while ( have_rows('speci_info_r') ) : the_row(); ?>
                                                            <tr>
                                                                <th width="170"><?php the_sub_field('speci_i_label'); ?></th>
                                                                <td><strong class="text-danger"><?php the_sub_field('speci_i_value'); ?></strong></td>
                                                            </tr>
                                                        <?php endwhile; ?>
                                                    </table>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php endwhile; // End found posts loop. ?>

<?php endif; // End check for posts. ?>

</main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>