<?php 
/**
 * Displaying archive page (category, tag, archives post, author's post)
 * 
 * @package bootstrap-basic
 */

get_header(); 

/**
 * determine main column size from actived sidebar
 */
?> 
<?php get_sidebar('left'); ?> 
				<div class="col-md-8 content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?> 

                            <header class="page-header">
                                <h1 class="page-title">
                                    WODs
                                </h1>

                                <?php
                                // Show an optional term description.
                                $term_description = term_description();
                                if (!empty($term_description)) {
                                    printf('<div class="taxonomy-description">%s</div>', $term_description);
                                } //endif;
                                ?>
                            </header><!-- .page-header -->
						
						<?php 
						/* Start the Loop */
						while (have_posts()) {
							the_post();

							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part('content', 'wod');
						} //endwhile; 
						?> 

						<?php bootstrapBasicPagination(); ?> 

						<?php } else { ?> 

						  <?php get_template_part('no-results', 'archive'); ?> 

						<?php } //endif; ?> 
					</main>
				</div>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 