<?php
/*
 * Template Name: no response
 *
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
	get_template_part('content', 'page');
endwhile;	
?>
</section>

<?php get_footer(); ?>
