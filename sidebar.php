<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div class="div_frame_sidebar">
	<?php /* 第一侧栏小工具区 */ ?>
	<div id="primary" role="complementary">
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</div><!-- END '#primary' -->

	<?php /* 第二侧栏小工具区 */
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
		<div id="secondary" role="complementary">
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</div><!-- END '#secondary' -->
	<?php endif; ?>
</div><!-- END '.div_list_side' -->
