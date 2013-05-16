<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

	<div class="bottom">
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/function.js"></script>
		<aside class="footbar clearfix">
			<?php get_sidebar('footer'); ?>
		</aside>
		<footer class="footer">
			<span><a href="./welcome#about" target="_blank" title="yang仔博客">yang仔博客</a> ©2012-2013</span>
			<span><a href="./welcome#statement" target="_blank" title="隐私权责">隐私权责</a></span>
			<span><a href="./sitemap.xml" target="_blank" title="站点地图">站点地图</a></span>
			<span><script src="http://s11.cnzz.com/stat.php?id=4581226&web_id=4581226" language="JavaScript"></script></span>
			<span><a href="http://wordpress.org/" target="_blank" title="WordPress">WordPress</a></span>
			<span><a href="http://www.w3.org/" target="_blank" title="HTML5">HTML5</a></span>
		</footer>
		<div id="btnbar" class="btnbar">
			<div class="loginout"><?php wp_loginout(); ?></div>
			<div class="gotop"><a href="javascript:void(0);" onclick="gotoPageTop()">返回页面顶部<br>Scroll to Top</a></div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
