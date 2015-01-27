<?php
/*
Template Name: Program Page
*/

get_header();

/**
 * determine main column size from actived sidebar
 */
//$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
				<div class="col-md-8 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', 'program');

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
                            // we don't think we will every have comments on a static page
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
                <div class="col-md-4 content-area" id="main-column">
                    <h3>Other CFA Programs</h3>
                    <ul class="nav nav-pills nav-stacked">
                      <?php
                        $id = get_the_ID();
                        $parent_id = wp_get_post_parent_id($id);
                        $args = array(
                            'child_of'     => $parent_id,
                            'date_format'  => get_option('date_format'),
                            'exclude'      => $id,
                            'title_li'     => ''
                        );                        
                      ?>
                      <?php wp_list_pages( $args ); ?>
                      <li><a href="<?php echo get_permalink($parent_id); ?>">All Programs</a></li>
                    </ul>
                    <div class="the_image">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <?php get_template_part('sidebar','right'); ?>
                </div>

<?php get_footer(); ?> 