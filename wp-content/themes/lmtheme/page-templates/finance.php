<?php
/**
 * Template Name: Finance
 */

get_header(); // Loads the header.php template. ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <?php if ( have_posts() ) : // Checks if any posts were found. ?>

            <?php while ( have_posts() ) : // Begins the loop through found posts. ?>

                <?php locate_template( array( 'misc/banner.php' ), true ); // Loads the misc/loop-meta.php template. ?>

                <div class="main-content">
                    <div class="container">

                        <?php the_post(); // Loads the post data. ?>

                        <div class="content-holder content-holder-col">
                            <div class="t-content">
                                <div class="t-conten-inner contact-form">
                                    <div class="copy">
                                       <h2>Financing for: <span class="text-primary"><?php echo isset($_GET['ptitle'])?$_GET['ptitle']:''; ?></span></h2>
                                        <br>
                                        <form id="finance_form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                                            <div class="form-group">
                                                <label for="">Name*</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="text" class="form-control" name="phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email*</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Comment*</label>
                                                <textarea name="comment" id="" cols="30" rows="10"
                                                          class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="action" value="get_finance">
                                                <button class="btn btn-primary btn-lg" name="get_finance" value="Get Finance">Get Finance</button>
                                            </div>
                                            <?php if(!empty($_GET['ptitle'])): ?>
                                                <input type="hidden" name="ptitle" value="<?php echo $_GET['ptitle']; ?>">
                                                <input type="hidden" name="pprice" value="<?php echo $_GET['pprice']; ?>">
                                                <input type="hidden" name="ptotal" value="<?php echo $_GET['ptotal']; ?>">
                                            <?php endif; ?>
                                            <?php if(!empty($_GET['ppricing-title'])): ?>
                                                <?php foreach($_GET['ppricing-title'] as $key => $title): ?>
                                                    <input type="hidden" name="ppricing-title[]" value="<?php echo $title; ?>">
                                                    <input type="hidden" name="ppricing-quantity[]" value="<?php echo $_GET['ppricing-quantity'][$key]; ?>">
                                                    <input type="hidden" name="ppricing-price[]" value="<?php echo $_GET['ppricing-price'][$key]; ?>">
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="t-sidebar">
                                <div class="widget widget-contact">
                                    <div class="widget-body overview-pricing">
                                        <div class="form-group">
                                            <span class="label label-block">$<?php echo isset($_GET['pprice'])?number_format($_GET['pprice'], 2, '.', ','):'0.00'; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pricing</label>
                                            <div class="panel panel-default">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>QTY</th>
                                                        <th class="text-right">Price</th>
                                                    </tr>
                                                    <?php if(!empty($_GET['ppricing-title'])): ?>
                                                        <?php foreach($_GET['ppricing-title'] as $key => $title): ?>
                                                            <tr>
                                                                <td><?php echo $title; ?></td>
                                                                <td><?php echo $_GET['ppricing-quantity'][$key]; ?></td>
                                                                <td class="text-right">$<?php echo number_format($_GET['ppricing-price'][$key], 2, '.', ','); ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="3">No Pricing</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h3> <small>Total:</small> <span class="pull-right">$<?php echo isset($_GET['ptotal'])?number_format($_GET['ptotal'], 2, '.', ','):'0.00'; ?></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>








            <?php endwhile; ?>

        <?php endif; ?>

    </main><!-- #content -->


<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<?php get_footer(); // Loads the footer.php template. ?>