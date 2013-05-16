<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="main" class="div_frame_body">
	<div id="content" role="main" class="div_frame_content div_content_fullwidth">
			<?php get_template_part( 'loop', 'page' ); ?>
			</div><!-- #content -->
	</div> <!--END '#content' '.div_frame_content' -->
</div><!-- END '#main' '.div_frame_body' -->
<?php get_footer(); ?>
