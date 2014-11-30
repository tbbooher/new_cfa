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
				<div class="col-md-9 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', 'start');

						} //endwhile;
						?> 
					</main>
				</div>
        <aside class="col-md-3 content-area" id="main-column">
          <div class="the_image">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <h3>Upcoming Events</h3>
          <div class="content-box big ch-item bottom-pad-small">
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
          <h3>Latest News</h3>
          <div class="content-box big ch-item bottom-pad-small">
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
        </aside>

<?php get_footer(); ?> 