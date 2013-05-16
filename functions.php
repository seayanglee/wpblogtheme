<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */

/** Tell WordPress to run mytheme_setup() when the 'after_setup_theme' hook is run. */
add_action('after_setup_theme', 'mytheme_setup');

if(!function_exists('mytheme_setup')):
function mytheme_setup() {
	// This theme uses post thumbnails
	add_theme_support('post-thumbnails');
	
	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');
}
endif;

if(!function_exists('mytheme_comment_count')) :
/*
 * 统计文章评论数量(不包括pingback、trackback)
 * @since mytheme 2.1
 */
function mytheme_comment_count($count) {
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id='.$id));
        return count($comments_by_type['comment']);
    }
    else {
        return $count;
    }
}
add_filter('get_comments_number', 'mytheme_comment_count', 0);
endif;

if(!function_exists('mytheme_comment')) :
/*
 * Template for comments and pingbacks.
 * To override this walker in a child theme without modifying the comments template
 * simply create your own mytheme_comment(), and that function will be used instead.
 * Used as a callback by wp_list_comments() for displaying the comments.
 * @since mytheme 2.1
 */
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	switch($comment->comment_type) :
		case '' : ?>
			<li id="li-comment-<?php comment_ID(); ?>">
				<article id="comment-<?php comment_ID(); ?>">
					<header>
						<span class="comment-userimg"><?php echo get_avatar($comment, $size='48'); ?></span>
						<span style="margin:0px 10px 0px 65px;"><?php echo get_comment_author_link(); ?></span>
						<span><?php echo get_comment_date().' '.get_comment_time(); ?></span>
						<span style="float:right"><?php comment_reply_link(array_merge($args, array('depth'=>$depth, 'max_depth'=>$args['max_depth']))); ?></span>
					</header>
					<div class="comment-content-text">
						<?php comment_text(); ?>
					</div>
				</article>
			</li>
		<?php break;
		case 'pingback'  :
		case 'trackback' : break;
	endswitch;
}
endif;

/*
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 * To override mytheme_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 * @since mytheme 2.1
 * @uses register_sidebar
 */
function mytheme_widgets_init() {
	// Area 1, located in the footer. Empty by default.
	register_sidebar(array(
		'name'=>'First Footer Widget Area',
		'id'=>'first-footer-widget-area',
		'before_widget'=>'<div id="%1$s" class="widget-content %2$s">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>',
	));
	
	// Area 2, located in the footer. Empty by default.
	register_sidebar(array(
		'name'=>'Second Footer Widget Area',
		'id'=>'second-footer-widget-area',
		'before_widget'=>'<div id="%1$s" class="widget-content %2$s">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>',
	));

	// Area 3, located in the footer. Empty by default.
	register_sidebar(array(
		'name'=>'Third Footer Widget Area',
		'id'=>'third-footer-widget-area',
		'before_widget'=>'<div id="%1$s" class="widget-content %2$s">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3 class="widget-title">',
		'after_title'=>'</h3>',
	));
}
add_action('widgets_init', 'mytheme_widgets_init');

/*
 * Removes the default styles that are packaged with the Recent Comments widget.
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using Twenty Ten 1.2 in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default mytheme styling.
 * @since mytheme 2.1
 */
function mytheme_remove_recent_comments_style() {
	add_filter('show_recent_comments_widget_style', '__return_false');
}
add_action('widgets_init', 'mytheme_remove_recent_comments_style');

if (!function_exists('mytheme_article_category')) :
/*
 * 打印当前文章的分类，生成HTML代码
 * @since mytheme 2.1
 */
function mytheme_article_category() {
	if(count(get_the_category())) {
		printf('%1$s', get_the_category_list(' '));
	}
}
endif;

if (!function_exists('mytheme_article_meta')) :
/*
 * 打印当前文章的作者、时间、分类及标签，生成HTML代码
 * @since mytheme 2.1
 */
function mytheme_article_meta() {
	printf('<label>作者：</label><a href="%1$s" title="查看%2$s的所有文章">%2$s</a>',
		get_author_posts_url(get_the_author_meta('ID')),
		get_the_author()
	);
	printf('<label>发表于：</label><a href="%1$s" title="%2$s">%3$s</a>',
		get_permalink(),
		esc_attr( get_the_time()),
		get_the_date()
	);
	if (count(get_the_category())) {
		printf('<label>分类：</label>%1$s', get_the_category_list(' '));
	}
	$tag_list = get_the_tag_list('<span name="tags">', '</span> <span name="tags">', '</span>');
	if ($tag_list) {
		printf('<label>标签：</label>%1$s', $tag_list);
	}
}
endif;

if (!function_exists('mytheme_tag_articlelink')) :
/*
 * 获取当前文章拥有的标签的所有文章链接，生成HTML代码
 * @since mytheme 2.1
 */
function mytheme_tag_articlelink() { ?>
<section class="section article-link">
	<?php
	global $post;
	$the_post = $post;
	$alltags = "";
	$posttags = get_the_tags($post->ID);
	if($posttags) :
		foreach($posttags as $tag) {
			$alltags = $alltags . $tag->name . ',';
		}
		$args = array(
			'numberposts' => 20,
			'post__not_in' => array($post->ID),
			'orderby'=>'rand',
			'tag' => $alltags
		);
		$myposts = get_posts($args);
		if($myposts) : ?>
			<header class="fore"><p class="fore-text">相关文章 (Related Articles)：</p></header>
			<ul>
			<?php foreach($myposts as $post) { ?>
				<li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
			<?php } ?>
			</ul>
		<?php else : ?>
			<header class="fore"><p class="fore-text">暂无相关文章 (No article related)</p></header>
		<?php endif;
	else : ?>
		<header class="fore"><p class="fore-text">暂无相关文章 (No article related)</p></header>
	<?php endif; 
	$post = $the_post; ?>
</section>
<?php
}
endif;
?>
