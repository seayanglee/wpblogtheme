<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<?php
if(    !is_active_sidebar('first-footer-widget-area')
	&& !is_active_sidebar('second-footer-widget-area')
	&& !is_active_sidebar('third-footer-widget-area')
) return;

if(is_active_sidebar('first-footer-widget-area')) : ?>
	<div class="footbar-narrow">
		<?php dynamic_sidebar('first-footer-widget-area'); ?>
	</div>
<?php
endif;

if(is_active_sidebar('second-footer-widget-area')) : ?>
	<div class="footbar-wide">
		<?php dynamic_sidebar('second-footer-widget-area'); ?>
	</div>
<?php
endif;

if(is_active_sidebar('third-footer-widget-area')) : ?>
	<div id="third" class="footbar-narrow">
		<?php dynamic_sidebar('third-footer-widget-area'); ?>
	</div>
<?php endif; ?>
