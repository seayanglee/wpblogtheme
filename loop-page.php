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
		<span class="article-editbtn"><?php edit_post_link( '编辑本文', '', '' ); ?></span>
		<div class="article-text">
			<?php the_content(); ?>
		</div><!-- END .article-text -->
	</div><!-- END .article-content -->
<?php endwhile; ?>
