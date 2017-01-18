<?php
/**
 * Template Name: Plain-Page
 *
 * @package WordPress
 * @subpackage Business-Blue
 * @since 0.3
 */
?>

<?php get_header(); ?>
<div class="page-wrap">
	<div class="sub-wrap">
        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                endwhile; endif; 
        ?>
    </div>
  </div>

<?php get_footer(); ?>
