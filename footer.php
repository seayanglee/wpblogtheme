<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

		<div class="bottom">
			<div class="bottom-box-middle">
				<div class="bottom-widget">
					<h3 class="bottom-title">关于博客（About Blog）</h3>
					<p></p>
				</div>
			</div><!-- END .bottom-box-middle -->
			<div class="bottom-box-large">
				<?php get_sidebar( 'footer' ); ?>
			</div><!-- END .bottom-box-large -->
			<div class="bottom-box-middle">
				<div class="bottom-widget">
					<h3 class="bottom-title">关注（Attention）</h3>
					<div style="text-align:center;">
						<p><a href="http://get.fedoraproject.org/" target="_blank"><img title="Fedora18正式发布" src="./img/f18release.png"/></a></p>
						<p><a href="http://www.ubuntu.com/" target="_blank"><img title="Ubuntu12.10正式发布" src="./img/banner3.png"/></a></p>
					</div>
				</div>
				<div class="bottom-widget">
					<h3 class="bottom-title">友情链接（Links）</h3>
					<ul>
						<li><a target="_blank" href="http://zhanglongqi.com/">Zhang Longqi's Blog</a></li>
						<li><a target="_blank" href="http://www.x_mcu.mezoka.com/">ぐ浀蔠亼潵灬 的博客</a></li>
					</ul>
				</div>
			</div><!-- END .bottom-box-middle -->
		</div><!-- END .bottom -->
		<div class="footer">
			<center>
				<span><a href="./" target="_blank" title="yang仔博客">yang仔博客</a> ©2012-2013</span>
				<span><a href="http://wordpress.org" target="_blank" title="WordPress">WordPress</a></span>
				<span><script src="http://s11.cnzz.com/stat.php?id=4581226&web_id=4581226" language="JavaScript"></script></span>
				<span><a href="./sitemap.xml" target="_blank" title="站点地图">站点地图</a></span>
				<span><a href="http://www.w3.org" target="_blank" title="HTML5">HTML5</a></span>
			</center>
		</div><!-- END .footer -->
	</div><!-- END .right -->
	<div class="loginout"><?php wp_loginout(); ?></div>
    <div class="goto"><a href="javascript:gotoPageTop();">返回页面顶部<br/>Scroll to Top</a></div>
    <script type="text/javascript">tagsColor();</script>
    <?php wp_footer(); ?>
</div>
</body>
</html>
