<?php
/*
Template Name: Single Event
*/
?>
<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
    <div class="col-sm-10 col-md-9 col-lg-8 content-area" id="main-column">
        <main id="main" class="site-main" role="main">
            <?php 
            while (have_posts()) {
                the_post();
                
                get_template_part('content', get_post_format());

                echo "\n\n";

                bootstrapBasicPagination();

                echo "\n\n";

                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                }

                echo "\n\n";

            } //endwhile;
            ?> 
        </main>
    </div>
    <aside class="col-sm-10 col-md-3 col-lg-4 content-area">
      <?php get_template_part('sidebar','right'); ?>
    </aside>
<?php get_footer(); ?> 