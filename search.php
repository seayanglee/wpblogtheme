<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="main" class="div_frame_body">
	<div id="content" role="main" class="div_frame_content div_content_halfwidth">
		<?php if ( have_posts() ) : ?>
			<h3 style="border-bottom:none;"><?php printf( '“%s”&nbsp;的搜索结果：', get_search_query() ); ?></h3>
			<?php get_template_part( 'loop', 'search' );
		else : ?>
			<h3 style="border-bottom:none;"><?php printf( '>_<&nbsp;&nbsp;Sorry，没有找到与&nbsp;“%s”&nbsp;相关的内容。', get_search_query() ); ?></h3>
		<?php endif; ?>
	</div> <!--END '#content' '.div_frame_content' -->
	<?php get_sidebar(); ?>
</div><!-- END '#main' '.div_frame_body' -->

<?php get_footer(); ?>
