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
<div class="col-sm-7 col-md-9 col-lg-8 content-area" id="main-column">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) { ?> 

        <header class="page-header">
            <h1 class="page-title">
                WODs
            </h1>
        </header><!-- .page-header -->

        <?php 
        /* Start the Loop */
        while (have_posts()) {
            the_post();

            /* Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part('content', 'shortwod');
        } //endwhile; 
        ?> 

        <?php bootstrapBasicPagination(); ?> 

        <?php } else { ?> 

        <?php get_template_part('no-results', 'archive'); ?> 

        <?php } //endif; ?> 
    </main>
</div>
<aside class="col-sm-5 col-md-3 col-lg-4 content-area">
    <?php dynamic_sidebar('sidebar-right'); ?>
    <?php get_template_part('sidebar','right'); ?>
</aside>

<?php get_footer(); ?> 