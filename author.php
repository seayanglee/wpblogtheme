<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php get_header(); ?>
<div class="main" role="main">
	<?php the_post(); ?>
	<div class="article">
		<div class="article-header"><?php printf('作者“%1$s”的文章（%2$s篇）：', get_the_author(), $wp_query->found_posts); ?></div>
	</div><!-- END .article -->
<?php if(have_posts()) :
	rewind_posts();
	get_template_part('loop', 'author');
else : ?>
	<div class="article">
		<div class="article-content">抱歉，没有查询到相关内容的文章！（Sorry, no article found!）</div>
	</div><!-- END .article -->
<?php endif; ?>
<?php if($wp_query->max_num_pages > 1) : ?>
	<div class="article">
		<div class="article-pgnum">
			<?php postbar(); ?>
		</div><!-- END .article-pgnum -->
	</div><!-- END .article -->
<?php endif; ?>
</div><!-- END .main -->
<?php get_footer(); ?>
