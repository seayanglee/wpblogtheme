<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>
<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
	<meta charset="UTF-8"/>
	<base href="<?php echo home_url(); ?>"/>
	<title><?php wp_title(' | ', true, 'right'); ?>yang仔博客 | 诗由心生</title>
	<meta name="author" content="Siyang Lee">
<?php if(is_home()) : ?>
	<meta name="keywords" content="yang仔,旸仔,李司旸"/>
	<meta name="description" content="yang仔博客，关注linux系统的使用与开发。对于桌面应用、服务器、嵌入式、物联网等事物感兴趣。点滴记录我的学习过程中的酸甜苦辣，分享我的学习成果与感悟!"/>
<?php endif; ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php
	if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply');
	wp_head();
?>
</head>

<body style="background:#f8f8f8;">
<div class="wrap">
	<header id="header" class="header">
	<?php if(is_single() || is_page()) : ?>
		<h2 class="sitelogo"><a href="./" title="yang仔博客">yang仔博客</a></h2>
	<?php else : ?>
		<h1 class="sitelogo"><a href="./" title="yang仔博客">yang仔博客</a></h1>
	<?php endif; ?>
		<p class="banner">诗由心生</p>
		<ul class="addbar clearfix">
			<li>
				<a id="addewm" class="addbtn" href="javascript:void(0);" onclick="showEweima()" title="二维码快速访问本站"></a>
				<div id="erweima">
					<a href="javascript:void(0);" onclick="hiddenEweima()" style="width:auto;">关闭（Close）</a>
					<p>扫描二维码快速访问</p>
					<img src="./img/erweima.png" height="150px" width="150px">
				</div>
			</li>
			<li><a id="addfav" class="addbtn" rel="sidebar" href="javascript:void(0);" title="收藏 yang仔博客 到收藏夹" onclick="return addFavorate()"></a></li>
			<li><a id="addrss" class="addbtn" href="./feed" target="_blank" title="订阅 yang仔博客"></a></li>
		</ul>
		<div id="search" class="search">
			<?php get_search_form(); ?>
		</div>
		
	</header>
	<nav id="menubar" class="menubar">
		<ul>
			<li style="border-left:none;"><a href="./" style="border-left:none;">首页 (Home)</a></li>
			<li><a href="./welcome" target="_blank">致访客 (Welcome)</a></li>
			<li><a href="./about" target="_blank">关于我 (About Me)</a></li>
			<li>
				<a href="javascript:void(0);" onclick="showSubMenu(event, 0)">分类 (Categories)</a>
				<div name="submenu" class="menu-sub">
					<ul>
						<li><a href="./category/os/linux">Linux</a></li>
						<li><a href="./category/coding">编程算法</a></li>
						<li><a href="./category/problems">问题记录</a></li>
						<li><a href="./category/it">IT杂谈</a></li>
						<li><a href="./category/life">生活随记</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="javascript:void(0);" onclick="showSubMenu(event, 1)">页面 (Pages)</a>
				<div name="submenu" class="menu-sub">
					<ul>
						<li><a href="./note" target="_blank">记事本（NoteBook）</a></li>
						<li><a href="./bookmark" target="_blank">书签夹（Bookmarks）</a></li>
						<li><a href="./motto" target="_blank">博客箴言（Motto）</a></li>
						<li><a href="http://www.renren.com/siyanglee" target="_blank">人人主页（renren.com）</a></li>
						<li><a href="#">GitHub项目（github.com）</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
	<section class="bird">
		<div class="bird-logo" title="博客箴言"></div>
		<div class="bird-content">
			<p class="bird-text"><?php bloginfo('description'); ?></p>
			<div class="bird-arrow"></div>
		</div>
	</section>
