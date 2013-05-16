<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<?php get_header(); ?>

<section class="main">
<?php if(have_posts()) : the_post(); ?>
	<header class="section fore">
		<p class="fore-text"><?php printf('作者“%1$s”的文章 (%2$s篇)：', get_the_author(), $wp_query->found_posts); ?></p>
	</header>
	<?php
	rewind_posts();
	while(have_posts()) :
		the_post();
		get_template_part('content', 'author');
	endwhile;
	if($wp_query->max_num_pages > 1) : ?>
	<nav class="section pagenav">
		<?php postbar(); ?>
	</nav>
	<?php endif;
else : ?>
	<header class="section fore">
		<p class="fore-text">Sorry，没有查询到相关内容的文章！</p>
	</header>
	<article class="section article" style="height:300px;">
		
	</article>
<?php endif; ?>	
</section>

<?php get_footer(); ?>
