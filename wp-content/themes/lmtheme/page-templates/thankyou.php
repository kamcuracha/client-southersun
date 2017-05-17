<?php
/**
 * Template Name: Thank
 */

get_header(); // Loads the header.php template. ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <?php if ( have_posts() ) : // Checks if any posts were found. ?>

            <?php while ( have_posts() ) : // Begins the loop through found posts. ?>

                <?php locate_template( array( 'misc/banner.php' ), true ); // Loads the misc/loop-meta.php template. ?>

                <?php the_post(); // Loads the post data. ?>

                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="content-holder copy content-holder-2">
                                    <p>Your submission was successful. One of our friendly staff will get back to you soon.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </main><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>