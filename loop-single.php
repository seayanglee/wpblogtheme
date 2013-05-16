<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php while(have_posts()) : the_post(); ?>
	<div class="article-content">
		<h1 class="article-title"><?php the_title(); ?></h1>
		<span class="article-editbtn"><?php edit_post_link('编辑本文', '', ''); ?></span>
		<div class="article-box">
			<!-- 文章作者、时间 -->
			<?php mytheme_posted_on(); ?>
			<!-- 文章分类、标签 -->
			<?php mytheme_posted_in(); ?>
		</div><!-- END .article-box -->
		<div class="article-text">
			<?php the_content(); ?>
		</div><!-- END .article-text -->
		<div class="article-container">
			<div class="article-pgnum">
				<?php multipagebar(); ?>
			</div>
			<div class="article-link">
				<span id="preArticle"><?php next_post_link('%link', '前一篇 previous《'.'%title'.'》'); ?></span>
				<span id="nextArticle"><?php previous_post_link('%link', '后一篇 next《'.'%title'.'》'); ?></span>
			</div>
			<div class="article-notice">
				请遵循这份 <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/cn/" target="_blank" title="署名-非商业性使用-相同方式共享">著作权协议</a>
				(Use <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank" title="Attribution-NonCommercial-ShareAlike">License</a>)，
				如需转载请注明来自<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"> yang仔博客</a>。
			</div>
		</div><!-- END .article-container -->
	</div><!-- END .article-content -->
<?php endwhile; ?>
