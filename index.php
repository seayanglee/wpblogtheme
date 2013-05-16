<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php get_header(); ?>
<div class="main" role="main">
	<?php get_template_part( 'loop', 'index' ); ?>
<?php if($wp_query->max_num_pages > 1) : ?>
	<div class="article">
		<div class="article-pgnum">
			<?php postbar(); ?>
		</div><!-- END .article-pgnum -->
	</div><!-- END .article -->
<?php endif; ?>
</div><!-- END .main -->
<?php get_footer(); ?>
