<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="main" class="div_frame_body">
	<div id="content" role="main" class="div_frame_content div_content_fullwidth">
		<h5>ERROR404&nbsp;您所访问的页面不存在，您可以尝试在本站搜索其它相关内容。</h5>
		<?php get_search_form(); ?>
		<br /><br />
		<h5>建议：由于本站近期改动了网站页面的后缀名，您可以尝试：</h5>
		<p>1.访问页面后缀改为.html，例如访问的“www.lsychina.com/xxx/”页面不存在，可修改为“www.lsychina.com/xxx.html”试试看！</p>
		<p>由此给您带来的不便，yang仔十分抱歉！-.-#</p>
	</div> <!--END '#content' '.div_frame_content' -->
</div><!-- END '#main' '.div_frame_body' -->

<?php get_footer(); ?>

