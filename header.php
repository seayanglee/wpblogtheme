<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	echo ' | ', get_bloginfo( 'description', 'display' );
	?>
</title>
<script type="text/javascript" src="http://www.lsychina.com/wp-content/themes/twentyten/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var containerdiv = $('#wrapper');
	containerdiv.css('backgroundPosition', '0 0');
	var bgscroll = function () {
		var current = parseInt(containerdiv.css('backgroundPosition').split(' ')[0]), newBgPos = (current + 2) + 'px 0px';
		containerdiv.css('backgroundPosition', newBgPos);
	};
	setInterval(bgscroll, 50);
});
</script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/* We add some JavaScript to pages with the comment form
 * to support sites with threaded comments (when in use).
 */
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );

wp_head();
?>
</head>

<body>
<a name="pagetop"></a>
<div id="wrapper" class="div_frame_container">
	<div id="header" class="div_frame_head">
		<div id="branding" role="banner" class="div_head_sitetitle">
			<div class="div_head_sitetitle"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>&nbsp;<sup>beta3.0</sup></a></div>
		</div>
		<div class="div_head_topbar">
			<div id="access" role="navigation" class="div_head_topmenu">
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
			<div class="div_head_toplink"></div>
		</div>
	</div><!-- END '#header' '.div_frame_head' -->
