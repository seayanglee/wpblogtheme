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
	get_template_part('content', 'single');
	mytheme_tag_articlelink();
	comments_template('', true);
endwhile;
?>
</section>

<?php get_footer(); ?>
