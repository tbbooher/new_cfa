<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?> 
        <!-- custom getting started content -->
            <div role="tabpanel">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist" id="getting_started_tabs">
                <li role="presentation" class="active"><a href="#elements" aria-controls="elements" role="tab" data-toggle="tab">Elements</a></li>
                <li role="presentation"><a href="#membership" aria-controls="membership" role="tab" data-toggle="tab">Membership</a></li>
                <li role="presentation"><a href="#skills_test" aria-controls="skills_test" role="tab" data-toggle="tab">Skills Test/Drop In</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="elements">
                  <p>These classes last about one hour and are made up of two to three new skills that will be foaised on each session_ There will also be a WOD for the second portion of the class. We need to know that you can demonstrate a basic level of technical proficiency in these movements, before moving on to our membership status. This designed curriculum is necessary for all new members to our program. Mandatory completion is required, before signing up for a membership These classes teach movements for optimal safety and performance in our program. </p>
                  
                </div>
                <div role="tabpanel" class="tab-pane fade " id="membership">
                  <p>derick please update membership info</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="skills_test">
                  <p>derick please update skills test information</p>
                </div>
              </div>

            </div>
        <!-- /end custom getting started content -->
		<div class="clearfix"></div>
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
</article><!-- #post-## -->