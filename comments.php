<?php
/*
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to mytheme_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */
?>

<div id="comments" class="div_content_comment">
	<?php if ( post_password_required() ) : ?>
		<p>请输入密码查看评论内容!</p>
</div><!-- END '#comments' '.div_content_comment' -->
		<?php return;
	endif; ?>

	<?php if ( have_comments() ) : ?>
		<h3 style="border-bottom:none;"><?php printf( '有 %1$s 条评论', get_comments_number() ); ?></h3>

		<ol>
			<?php wp_list_comments( array( 'callback' => 'twentyten_comment' ) ); ?>
		</ol>
	<?php else : 
	if ( ! comments_open() ) : ?>
		<p>评论已关闭！</p>
	<?php endif; ?>
	<?php endif; ?>
	<?php comment_form(); ?>
</div><!-- END '#comments' '.div_content_comment' -->
