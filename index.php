<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="main" class="div_frame_body">
	<div id="content" role="main" class="div_frame_content div_content_halfwidth">
		<?php get_template_part( 'loop', 'index' ); //Run the loop to output the posts ?>
	</div> <!--END '#content' '.div_frame_content' -->
	<?php get_sidebar(); ?>
</div><!-- END '#main' '.div_frame_body' -->

<?php get_footer(); ?>
