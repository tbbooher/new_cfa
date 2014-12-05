<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?>
				<div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <?php
                                $args = array( 'post_type' => 'wod', 'posts_per_page' => 1 );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) :
                                  $loop->the_post();
                                  $title = get_the_title();
                                  $content = get_the_content();
                                  $permalink = get_permalink( get_the_ID());
                                  $image = get_the_post_thumbnail(get_the_ID(), 'medium', array( 'class' => 'img-thumbnail hidden-xs' ));
                                endwhile;
                                if ($image == '') {
                                    $image = '<img src="'.get_bloginfo('template_directory').'/img/Cookies.jpg">';
                                };
                            ?>
                            <?php echo $image; ?>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                                <?php 
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('content', 'page');
                                    echo "\n\n";

                                    // If comments are open or we have at least one comment, load up the comment template
                                    // we don't think we will every have comments on a static page
                                    if (comments_open() || '0' != get_comments_number()) {
                                        comments_template();
                                    }
                                    echo "\n\n";
                                } //endwhile;
                                ?>
                        </div>                      
                    </div>
                </div>
				<div class="container marketing">
                    <div class="row pad-above">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="content-box big ch-item bottom-pad-small well">
                                <div class="box_content">
                                    <h3>Workout of the Day</h3>
                                    <h4><a href="<?php echo $permalink ?>"><?php echo $title; ?></a></h4>
                                    <div class="entry-content">
                                        <?php echo $content; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="content-box big ch-item bottom-pad-small well">
                                <!-- BUSINESS ITEM -->
                                <div class="box_content">
                                    <?php
                                    $args = array( 'post_type' => 'business_item', 'posts_per_page' => 1 );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                      the_title( '<h3>', '</h3>' );
                                      echo '<div class="entry-content">';
                                      the_content();
                                      echo '</div>';
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="content-box big ch-item bottom-pad-small well">
                                <!-- NEWS ITEM -->
                                <div class="box_content">
                                    <?php
                                    $args = array( 'post_type' => 'news_item', 'posts_per_page' => 1 );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                      the_title( '<h3>', '</h3>' );
                                      echo '<div class="entry-content">';
                                      the_content();
                                      echo '</div>';
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
<?php get_footer(); ?> 