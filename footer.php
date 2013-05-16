<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

		<div class="bottom" role="complementary">
			<?php get_sidebar('footer'); ?>
			<div style="clear:both;"></div>
		</div><!-- END .bottom -->
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
		<div class="footer">
			<center>
				<span><a href="./welcome#about" target="_blank" title="yang仔博客">yang仔博客</a> ©2012-2013</span>
				<span><a href="./welcome#statement" target="_blank" title="隐私权责">隐私权责</a></span>
				<span><a href="./sitemap.xml" target="_blank" title="站点地图">站点地图</a></span>
				<span><script src="http://s11.cnzz.com/stat.php?id=4581226&web_id=4581226" language="JavaScript"></script></span>
				<span><a href="http://wordpress.org" target="_blank" title="WordPress">WordPress</a></span>
				<span><a href="http://www.w3.org" target="_blank" title="HTML5">HTML5</a></span>
			</center>
			<div id="leftbottom" class="leftbottom">
				<div class="loginout"><?php wp_loginout(); ?></div>
				<div class="goto"><a href="javascript:void(0);" onClick="gotoPageTop()">返回页面顶部<br/>Scroll to Top</a></div>
			</div><!-- END .leftbottom -->
		</div><!-- END .footer -->
	</div><!-- END .right -->
    <?php wp_footer(); ?>
</div>
</body>
</html>
