<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div id="footer" role="contentinfo" class="div_frame_foot">
	<div class="div_foot_end">
		<p>
			<a href="http://www.lsychina.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>&nbsp;&nbsp;
			Copyright&copy;&nbsp;2012&nbsp;&nbsp;请联系Email:siyanglee.lz@gmail.com
			
		</p>
		<p>
			采用<a href="http://wordpress.org" title="WordPress WebSite">WordPress</a>博客系统
			使用主题:<a href="http://www.lsychina.com">MyBlogTheme Beta1.0</a> Based on <a href="http://wordpress.org/extend/themes/twentyten">TwentyTen</a>
		</p>
	</div><!-- END '.div_foot_end' -->
</div><!-- END '#footer' '.div_frame_foot' -->
</div><!-- END '#wrapper' '.div_frame_container' -->
<div><a href="#pagetop" class="a_foot_gototop">回到顶部</a></div>

<!-- BEGIN JiaThis Button -->
<script type="text/javascript" >
var jiathis_config={
	siteNum:6,
	sm:"fav,qzone,renren,douban,tsina,tqq",
	summary:"",
	showClose:true,
	hideMore:true
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jiathis_r.js?type=left&btn=l.gif&move=1" charset="utf-8"></script>
<!-- END JiaThis Button -->

<?php wp_footer(); ?>

</body>
</html>
