
  <div  id="post-<?php the_ID(); ?>" class="col-md-6">

    <div class="row">
      <div class="col-md-4">
           <?php the_post_thumbnail('medium', array('class' => 'img-rounded img-responsive')); ?>
      </div>
      <div class="col-md-8">
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>
        <div>
          <a href="mailto:<?php echo get_post_meta(get_the_ID(), 'email', true) ?>"> <i class="fa fa-envelope"></i> Email <?php the_title(); ?></a>
          <p><?php echo get_post_meta(get_the_ID(), 'title', true) ?></p>
          <?php bootstrapBasicEditPostLink(); ?>
        </div>
      </div>
    </div>                                                                                  
    <p class="row">                                    
        <?php the_content(bootstrapBasicMoreLinkText()); ?> 
        <!--<hr /> -->
    </p>
  </div>
