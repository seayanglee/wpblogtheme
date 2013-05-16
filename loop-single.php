<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="nav-above" class="div_content_pagelink2">
		<div style="float:left;"><?php next_post_link( '%link', '前一篇《' . '%title' . '》' ); ?></div>
		<div style="float:right; text-align:right;"><?php previous_post_link( '%link', '后一篇《' . '%title' . '》' ); ?></div>
	</div>

	<div id="post-<?php the_ID(); ?>" class="div_content_post">
		<h1 id="article"><?php the_title(); ?></h1>
		<h4>
			<!-- 文章作者、时间 -->
			<?php twentyten_posted_on(); ?>
			<!-- 文章分类、标签 -->
			<?php twentyten_posted_in(); ?>
			<!-- 编辑超链接 -->
			<?php edit_post_link( '编辑本文', '<span>', '</span>' ); ?>
		</h4>
		<div class="div_content_posttext">
			<?php the_content(); ?>
		</div><!-- END '.div_content_posttext' -->
		
		<?php wp_link_pages( array( 'before' => '<div class="div_content_pagelink3">文章页码', 'after' => '</div>' ) ); ?>
	</div><!-- END '.div_content_post' -->
	
	<div class="div_content_address">
		<p>本文连接地址：<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_permalink(); ?></a></p>
		<p>友情提示：本站大多数文章系<strong>原创作品</strong>。旸仔十分<strong>欢迎大家分享或转载这里的文章</strong>！转载时请注明出处。</p>
		
	</div>
	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
