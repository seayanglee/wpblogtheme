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
		<p class="fore-text"><?php
		if(is_day()) :
			printf('日期“%1$s”的文章（%2$s篇）：', get_the_date(), $wp_query->found_posts);
		elseif(is_month()) :
			printf('月份“%1$s”的文章（%2$s篇）：', get_the_date(), $wp_query->found_posts);
		elseif(is_year()) :
			printf('年份“%1$s”的文章（%2$s篇）：', get_the_date(), $wp_query->found_posts);
		else :
			printf('归档文章（%1$s篇）：', $wp_query->found_posts);
		endif;
		?></p>
	</header>
	<?php
	rewind_posts();
	while(have_posts()) :
		the_post();
		get_template_part('content', 'archive');
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
