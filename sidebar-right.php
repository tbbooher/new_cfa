<h3>Latest News</h3>
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
<?php dynamic_sidebar('sidebar-right'); ?>
<div>&nbsp;</div>
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