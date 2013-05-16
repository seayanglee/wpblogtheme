<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php while(have_posts()) : the_post(); ?>
	<div class="article">
		<div class="article-content">
			<h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="article-text">
			<?php the_content('阅读全文...'); ?>
			</div><!-- END .article-text -->
			<div class="article-box-bottom">
				<!-- 文章作者、时间 -->
				<?php mytheme_posted_on(); ?>
				<!-- 文章分类、标签 -->
				<?php mytheme_posted_in(); ?>
			</div><!-- END .article-box-bottom -->
		</div><!-- END .article-content -->
	</div><!-- END .article -->
<?php endwhile; ?>
