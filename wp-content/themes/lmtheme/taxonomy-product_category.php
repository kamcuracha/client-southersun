<?php

get_header(); // Loads the header.php template. 

$term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
if($term->parent != 0)
    $parent = get_term($term->parent, get_query_var('taxonomy') );
?>

<main <?php hybrid_attr( 'content' ); ?>>

    <div class="banner">
        <div class="container">
            <div class="banner-intro">
                <h1><?php echo $term->name; ?></h1>
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
                <li class="active"><?php echo $term->name; ?></li>
            </ol>

            <div class="content-holder">
                <?php if($term->parent == 0): $sub_categories = get_terms( 'product_category', 'parent='.$term->term_id.'&orderby=name&hide_empty' ); ?>
                    <?php foreach($sub_categories as $key => $sub_category): ?>
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo z_taxonomy_image_url($sub_category->term_id)?:'/wp-content/plugins/categories-images/images/placeholder.png'; ?>" alt="<?php echo $sub_category->name; ?>">
                            </div>
                            <div class="product-content">
                                <div class="product-heading">
                                    <div class="product-left">
                                        <h2><a href="<?php echo get_term_link($sub_category); ?>"><?php echo $sub_category->name; ?></a></h2>
                                    </div>
                                </div>
                                <div class="copy copy-sm">
                                    <p><?php echo $sub_category->description; ?></p>
                                </div>
                                <a class="btn btn-primary" href="<?php echo get_term_link($sub_category); ?>">More Details</a>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?php
                        $page = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
                        $args = array(
                            'post_type' => 'products',
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'product_category',
                                'field' => 'id',
                                'terms' => $term->term_id
                                 )
                              ),
                            'posts_per_page' => 10,
                            'paged'               => $page,
                            );
                        $products = new WP_Query( $args );
                    ?>
                    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                        <div class="product">
                            <div class="product-img">

                                <?php
                                    if( get_the_post_thumbnail() ) {
                                        the_post_thumbnail('medium');
                                    } else {

                                        $rows = get_field('product_gallery', $post->ID ); // get all the rows
                                        $first_row = $rows[0]; // get the first row
                                        $first_row_image = $first_row['p_gallery_image' ]; // get the sub field value

                                        $image = wp_get_attachment_image_src( $first_row_image, 'full' );
                                        ?>
                                        <a href="#" class="imghover"><img src="<?php echo $image[0]; ?>"/> <?php
                                    }

                                ?>
                            </div>
                            <div class="product-content">
                                <div class="product-heading">
                                    <?php if( get_field('product_price') ): ?>
                                        <div class="product-right">
                                            <span class="label">$<?php the_field('product_price'); ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <div class="product-left">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                        <?php if( get_field('sub_title') ): ?>
                                            <span><?php the_field('sub_title'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="copy copy-sm">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <a class="btn btn-primary" href="<?php the_permalink(); ?>">More Details</a>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php if(isset($products)): ?>
                <?php if($products->max_num_pages > 1): $page = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1; ?>
                    <ul class="pagination">
                        <li class="<?php echo $page == 1? 'disabled':''; ?>">
                            <a href="<?php echo '?page=' . ($page == 1?$page:($page-1)); ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for($i=1; $i<=$products->max_num_pages; $i++): ?>
                            <li class="<?php echo ($page==$i)? 'active':'';?>"><a href="<?php echo '?page=' . $i; ?>"><?php echo $i;?></a></li>
                        <?php endfor; ?>
                        <li class="<?php echo $page == $products->max_num_pages? 'disabled':''; ?>">
                            <a href="<?php echo '?page=' . ($page == $products->max_num_pages?$page:($page+1)); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

</main><!-- #content -->



<?php get_footer(); // Loads the footer.php template. ?>