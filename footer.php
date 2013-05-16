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
		<p><center>
			<span><a href="http://www.lsychina.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>&copy;2012</span>
			<span>使用<a href="http://wordpress.org" title="WordPress WebSite">WordPress</a>
			<span><script src="http://s11.cnzz.com/stat.php?id=4581226&web_id=4581226" language="JavaScript"></script></span>
		</center></p>
	</div><!-- END '.div_foot_end' -->
</div><!-- END '#footer' '.div_frame_foot' -->
</div><!-- END '#wrapper' '.div_frame_container' -->
<div><a href="#pagetop" class="a_foot_gototop">回到顶部</a></div>

<!-- BEGIN JiaThis Button -->
<script type="text/javascript" >
var jiathis_config={
	siteNum:6,
	sm:"fav,email,qzone,renren,douban,tsina",
	summary:"",
	boldNum:2,
	showClose:true,
	hideMore:false
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jiathis_r.js?type=left&btn=l3.gif&move=0" charset="utf-8"></script>
<!-- END JiaThis Button -->

<?php wp_footer(); ?>

</body>
</html>
