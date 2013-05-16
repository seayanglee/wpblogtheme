<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php /* 如果没有可显示的内容，显示一个空档页 */ ?>
<?php if ( ! have_posts() ) : ?>
	没有可显示的内容，显示一个空档页
<?php endif; ?>

<?php
	/* 开始循环显示内容 */
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php /* 文章形式：“标准” */ ?>
	<div id="post-<?php the_ID(); ?>" class="div_content_post">
		<h2 id="article"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<h4>
			<!-- 文章作者、时间 -->
			<?php twentyten_posted_on(); ?>
			<!-- 文章分类、标签 -->
			<?php twentyten_posted_in(); ?>
			<!-- 编辑超链接 -->
			<?php edit_post_link( '编辑本文', '<span>', '</span>' ); ?>
		</h4>
		<div class="div_content_posttext">
			<?php
			if ( is_archive() || is_search() ) : // Only display excerpts for archives and search.
				the_excerpt();
			else :
				the_content( '阅读全文...' );
			endif;
			?>
		</div>
	</div><!-- END '.div_content_post' -->
<?php endwhile; // End the loop. Whew. ?>

<?php /* 显示翻页超链接 */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="div_content_pagelink1">
		<div style="float:left"><?php previous_posts_link( '<<前一页(更新的内容)' ); ?></div>
		<div style="float:right"><?php next_posts_link( '(更旧的内容)后一页>>' ); ?></div>
	</div><!-- END '.div_content_pagelink1' -->
<?php endif; ?>
