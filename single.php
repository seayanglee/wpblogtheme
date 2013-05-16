<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php get_header(); ?>
<div class="main" role="main">
	<div class="article">
		<?php get_template_part('loop', 'single'); ?>
	</div><!-- END .article -->
	<div class="article">
		<div class="article-comment">
			<h3 class="article-comment-title">暂时关闭评论（Sorry, Reply is Closed）!</h3>
		</div><!-- END .article-comment -->
	</div><!-- END .article -->
</div><!-- END .main -->
<?php get_footer(); ?>
