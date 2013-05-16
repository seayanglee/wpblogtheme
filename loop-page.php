<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="div_content_post" >
		<h1>
			<?php the_title(); ?>
			<?php edit_post_link( '编辑内容', '<span style="font-size:12px; margin-left:20px;">', '</span>' ); //编辑超链接 ?></h1>
		<div class="div_content_posttext">
			<?php the_content(); ?>
		</div><!-- END '.div_content_posttext' -->
	</div><!-- END '.div_content_post' -->
	<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>
