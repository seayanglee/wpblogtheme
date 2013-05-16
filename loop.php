<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php while(have_posts()) : the_post(); ?>
	<div class="article">
		<div class="article-content preview">
			<h2 class="article-title">
				[<?php mytheme_posted_cat(); ?>]
				<a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
			</h2>
			<div class="article-text">
			<?php the_content('阅读全文...'); ?>
			</div><!-- END .article-text -->
		</div><!-- END .article-content -->
	</div><!-- END .article -->
<?php endwhile; ?>
