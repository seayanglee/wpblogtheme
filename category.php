<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<?php get_header(); ?>

<section class="main">
<?php if(have_posts()) : ?>
	<header class="section fore">
		<p class="fore-text"><?php printf('分类“%1$s”的文章 (%2$s篇)：', single_cat_title('', false), $wp_query->found_posts); ?></p>
	</header>
<?php
while(have_posts()) :
	the_post();
	get_template_part('content', 'category');
	if($wp_query->max_num_pages > 1) : ?>
	<nav class="section pagenav">
		<?php postbar(); ?>
	</nav>
	<?php endif; 
endwhile;
else : ?>
	<header class="section fore">
		<p class="fore-text">Sorry，没有查询到相关内容的文章！</p>
	</header>
	<article class="section article" style="height:300px;">
		
	</article>
<?php endif; ?>	
</section>

<?php get_footer(); ?>
