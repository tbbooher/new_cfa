<?php
/**
 * Template for displaying static pages
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
//$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
        <div class="row col-md-9 content-area" id="main-column">
        <div class="col-md-12 coachtitle">
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
                    <!-- now display coaches -->
                    
<?php
$i = 1;
 $args = array( 'post_type' => 'coach', 'posts_per_page' => 20 );
 $loop = new WP_Query( $args );

//added before to ensure it gets opened
echo '<div class="clearfix">';
 while ( $loop->have_posts() ) : $loop->the_post();
 get_template_part('content', 'coach');
     // post stuff...

     // if multiple of 3 close div and open a new div
     if($i % 2 == 0) {echo '</div><div class="clearfix">';}

$i++; endwhile;
//make sure open div is closed
echo '</div>';
?>

                    
                  
        </div>

<div class="col-md-3 content-area" id="main-column">
                    <h3>Upcoming Events</h3>
                    
                        <div class="entry-content">
                           <?php
            $args = array( 'post_type' => 'news_item', 'posts_per_page' => 1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            the_title( '<h4>', '</h4>' );
            echo '<div class="entry-content">';
            the_content();
            echo '</div>';
            endwhile;
            ?>    
                          </div>  
                      <h3>Recent News</h3>      
                         <?php the_post_thumbnail('medium'); ?> <br>
                        <p>Now available in fridge!</p>
                        <div class="entry-content">
                          <?php
                            $args = array( 'post_type' => 'business_item', 'posts_per_page' => 1 );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                              the_title( '<h4>', '</h4>' );
                              echo '<div class="entry-content">';
                              the_content();
                              echo '</div>';
                            endwhile;
                          ?>
                          </div> 
                    </div>


<?php get_footer(); ?> 