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
<title>
	<?php
	wp_title( ' - ', true, 'right' );
	bloginfo( 'name' );
	echo " - ";
	bloginfo( 'description' );
	?>
</title>
<?php if ( is_home() ) : ?>
<meta name="keywords" content="yang仔,旸仔,李司旸" />
<meta name="description" content="yang仔博客，关注linux系统的使用、开发。对于桌面应用、服务器、嵌入式、物联网等事物感兴趣。点滴记录我的linux及计算机学习过程中的酸甜苦辣，分享我的学习成果与感悟!" />
<?php endif; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/* We add some JavaScript to pages with the comment form
 * to support sites with threaded comments (when in use).
 */
if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
wp_head();
?>
<script type="text/javascript">
var current = 0;
function scrollBg() {
	current += 2;
	document.getElementById("wrapper").style.backgroundPosition = current + "px 0";
}
setInterval("scrollBg()", 70);
</script>
</head>

<body>
<a name="pagetop"></a>
<div id="wrapper" class="div_frame_container">
	<div id="header" class="div_frame_head">
		<div id="branding" role="banner" class="div_head_sitetitle">
			<?php if( is_single() || is_page() ) : ?>
			<h2 id="sitetitle"><a href="http://www.lsychina.com" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
			<?php else : ?>
			<h1 id="sitetitle"><a href="http://www.lsychina.com" title="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
			<span><?php bloginfo( 'description' ); ?></span>
		</div>
		<div id="access" role="navigation" class="div_head_topbar">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div>
	</div><!-- END '#header' '.div_frame_head' -->
