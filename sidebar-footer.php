<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<?php
	if(    !is_active_sidebar('first-footer-widget-area')
		&& !is_active_sidebar('second-footer-widget-area')
		&& !is_active_sidebar('third-footer-widget-area')
	)
		return;
?>

<div id="footer-widget-area" role="complementary">
<?php if(is_active_sidebar('first-footer-widget-area')): ?>
	<div id="first" class="bottom-box-middle">
		<?php dynamic_sidebar('first-footer-widget-area'); ?>
	</div><!-- END .bottom-box-middle -->
<?php
	endif;
	if(is_active_sidebar('second-footer-widget-area')):
?>
	<div id="second" class="bottom-box-large">
		<?php dynamic_sidebar('second-footer-widget-area'); ?>
	</div><!-- END .bottom-box-large -->
<?php
	endif;
	if(is_active_sidebar('third-footer-widget-area')):
?>
	<div id="third" class="bottom-box-middle">
		<?php dynamic_sidebar('third-footer-widget-area'); ?>
	</div><!-- END .bottom-box-middle -->
<?php endif; ?>
</div><!-- END #footer-widget-area -->
