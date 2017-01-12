<?php get_header(); ?>

  <div class="page-wrap">
    <div class="sub-wrap">
  	<div class="grid">
  		<div class="textbox">

        <?php 
	        if ( have_posts() ) : while ( have_posts() ) : the_post();
	            get_template_part( 'index-content', get_post_format() );
	            endwhile; endif; 
        ?>
        </div>
        </div>
    </div>
  </div><!-- END .page-wrap -->

<?php get_footer(); ?>