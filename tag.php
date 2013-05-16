<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="main" class="div_frame_body">
	<div id="content" role="main" class="div_frame_content div_content_halfwidth">
		<h2 style="border-bottom:none;"><?php printf( '标签为&nbsp;“%s”&nbsp;的文章：', single_tag_title( '', false ) ); ?></h2>
		<?php get_template_part( 'loop', 'tag' ); ?>
	</div> <!--END '#content' '.div_frame_content' -->
	<?php get_sidebar(); ?>
</div><!-- END '#main' '.div_frame_body' -->

<?php get_footer(); ?>
