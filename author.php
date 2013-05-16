<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="main" class="div_frame_body">
	<div id="content" role="main" class="div_frame_content div_content_halfwidth">
		<?php if ( have_posts() ) :
			the_post(); ?>
			<h3 style="border-bottom:none;"><?php printf( '“%s”&nbsp;的文章：', get_the_author() ); ?></h3>
			<?php
			rewind_posts();
			get_template_part( 'loop', 'author' );
		else : ?>
			<h3 style="border-bottom:none;">Sorry，这个作者很懒，什么也没写。</h3>
		<?php endif; ?>
	</div> <!--END '#content' '.div_frame_content' -->
	<?php get_sidebar(); ?>
</div><!-- END '#main' '.div_frame_body' -->

<?php get_footer(); ?>
