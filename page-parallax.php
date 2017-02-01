<?php
/**
 * Template Name: Parallax-Top
 *
 * @package WordPress
 * @subpackage Business-Blue
 * @since 0.3
 */
?>

<?php get_header(); ?>
<div class="page-wrap">
    <div class="page-parallax" data-parallax="scroll" " data-bleed="">
            <div class="parallax-overlay">
                <h1 id="parallax-header">Something was supposed to happen</h1>
            </div>
        </div>
        <div class="parallax-push">&nbsp;</div>
        <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                endwhile; endif; 
        ?>
  </div>

<?php get_footer(); ?>
