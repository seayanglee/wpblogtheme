<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<base href="<?php echo home_url(); ?>"/>
<title><?php wp_title(' | ', true, 'right'); ?>yang仔博客 | share with you</title>
<meta name="author" content="Siyang Lee">
<?php if(is_home()) : ?>
<meta name="keywords" content="yang仔,旸仔,李司旸"/>
<meta name="description" content="yang仔博客，关注linux系统的使用与开发。对于桌面应用、服务器、嵌入式、物联网等事物感兴趣。点滴记录我的linux及计算机学习过程中的酸甜苦辣，分享我的学习成果与感悟!"/>
<?php endif; ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php
	if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply');
	wp_head();
?>
</head>

<body>
<div class="wrapper">
	<div id="lefterea" class="left">
		<div role="banner" class="logo">
		<?php if(is_single() || is_page()) : ?>
			<h2 class="brand"><a href="./" title="yang仔博客">yang仔博客</a></h2>
		<?php else : ?>
			<h1 class="brand"><a href="./" title="yang仔博客">yang仔博客</a></h1>
		<?php endif; ?>
			<h3 class="brand-sub">share with you</h3>
		</div><!-- END .logo -->
		<div class="button">
        	<ul>
            	<li>
                	<a id="addewm" class="addbtn" href="javascript:void(0);" onClick="showEweima()" title="二维码快速访问本站"></a>
                    <div id="erweima">
                    	<a href="javascript:void(0);" onClick="hiddenEweima()" style="width:auto;">关闭（Close）</a>
                        <p>扫描二维码快速访问</p>
                        <img src="./img/erweima.png" width="150px" height="150px"/>
                    </div>
                </li>
            	<li><a id="addfav" class="addbtn" rel="sidebar" href="javascript:void(0);" title="收藏 yang仔博客 到收藏夹" onClick="return addFavorate()"></a></li>
            	<li><a id="addrss" class="addbtn" href="./feed" target="_blank" title="订阅 yang仔博客"></a></li>
            </ul>
        </div><!-- END .button -->
		<div class="search">
			<?php get_search_form(); ?>
		</div><!-- END .search -->
	</div><!-- END .left -->

	<div class="right">
		<div id="menubar" class="menu" role="navigation">
			<ul>
				<li style="border-left:none;"><a href="./" style="border-left:none;">首页 (Home)</a></li>
				<li><a href="./welcome">致访客 (Welcome)</a></li>
				<li><a href="./about">关于我 (About Me)</a></li>
				<li>
                	<a href="javascript:void(0);" onClick="showSubMenu(event, 0)">分类 (Categories)</a>
                    <div name="submenu" class="menu-sub">
                    	<ul>
                    		<li><a href="./category/os/linux">Linux</a></li>
                    		<li><a href="./category/coding">编程算法</a></li>
                    		<li><a href="./category/project">工程项目</a></li>
                    		<li><a href="./category/problems">问题记录</a></li>
                    		<li><a href="./category/it">IT杂谈</a></li>
                    		<li><a href="./category/life">生活物语</a></li>
                        </ul>
                    </div>
                </li>
				<li>
                	<a href="javascript:void(0);" onClick="showSubMenu(event, 1)">页面 (Pages)</a>
                    <div name="submenu" class="menu-sub">
                    	<ul>
                        	<li><a href="#">我的收藏夹（Bookmarks）</a></li>
                            <li><a href="http://www.renren.com/siyanglee">人人主页（renren.com）</a></li>
                        </ul>
                    </div>
                </li>
			</ul>
		</div><!-- END .menu -->
		<div id="blank" class="blank">
			<div class="bird">
				<div class="bird-logo"></div>
				<div class="bird-box">
					<div class="bird-content">
						<p class="bird-text"><?php bloginfo('description'); ?></p>
					</div>
				</div>
				<div class="bird-arrow"></div>
			</div><!-- END .bird -->
		</div><!-- END .blank -->
