<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<section id="comment" class="section comment">
<?php if(comments_open()) : 
	$comments_num = get_comments_number();
	if($comments_num > 0) : ?>
	<header class="fore">
		<p class="fore-text"><?php echo '有'.$comments_num.'条留言 ('.$comments_num.($comments_num>1 ? ' Responses' : ' Response').')：'; ?></p>
	</header>
	<div id="response" class="comment-content">
		<ol>
			<?php wp_list_comments(array('callback' => 'mytheme_comment', 'type'=>'comment')); ?>
		</ol>
	</div>
	<fieldset id="respond" class="comment-add comment-add-half">
	<?php else : ?>
	<header class="fore">
		<p class="fore-text">发表留言 (Respond)：</p>
	</header>
	<fieldset id="respond" class="comment-add comment-add-full">
	<?php endif;
		comment_form(array(
			'fields'               => array(
				'author' => '<p><input id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" placeholder="称呼 Name'.($req?' (必填 Required)"':'"').$aria_req.'/></p>',
				'email'  => '<p><input id="email" name="email" type="text" value="'.esc_attr($commenter['comment_author_email']).'" placeholder="邮箱 Email'.($req?' (必填 Required)"':'"').$aria_req.'/></p>',
				'url'    => '<p><input id="url" name="url" type="text" value="'.esc_attr($commenter['comment_author_url']).'" placeholder="站点 Link"'.$aria_req.'/></p>',
			),
			'comment_field'        => '<p><textarea id="comment" name="comment" aria-required="true" placeholder="随便留点什么吧~~请不要吝惜您的文字 Your response here"></textarea></p>',
			'must_log_in'          => '<p>'.sprintf('请先<a href="%s">登录 (login)</a>发表留言', wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))).'</p>',
			'logged_in_as'         => '<p>'.sprintf('以<a href="%1$s">%2$s</a>身份留言，<a href="%3$s" title="Log out of this account">退出登录 (logout)</a>', admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post_id)))).'</p>',
			'comment_notes_before' => '',
			'comment_notes_after'  => '<p><span>* 您的留言可能需要通过审核后才会发表。</span></p>',
			'id_form'              => 'commentform',
			'id_submit'            => 'submit',
			'title_reply'          => '发表留言 (Respond)：',
			'title_reply_to'       => '发表留言 (Respond to) @%s：',
			'cancel_reply_link'    => '取消',
			'label_submit'         => '提交留言',
		)); ?>
	</fieldset>
<?php else : ?>
	<header class="fore">
		<p class="fore-text">暂时关闭评论！</p>
	</header>
<?php endif; ?>
</section>
