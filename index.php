<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<?php get_header(); ?>

<section class="main">
<?php
while(have_posts()) :
	the_post();
	get_template_part('content', 'index');
	if($wp_query->max_num_pages > 1) : ?>
	<nav class="section pagenav">
		<?php postbar(); ?>
	</nav>
	<?php endif; 
endwhile;
?>
</section>

<?php get_footer(); ?>
