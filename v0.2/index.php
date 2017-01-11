<?php get_header(); ?>
<!-- This is the main blog -->
  <div class="page-wrap">
        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
            endwhile; endif; 
        ?>
    <!--<?php get_sidebar(); ?>-->

  </div> <!-- /page wrap -->

<?php get_footer(); ?>