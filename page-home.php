<?php
/**
 * Template Name: Business-Blue-Parallax-Top
 *
 * @package WordPress
 * @subpackage Business-Blue
 * @since 0.3
 */

<?php get_header(); ?>
	<div class="page-wrap">
	buttttt
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif; 
		?>
	</div>