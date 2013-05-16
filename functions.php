<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.0
 */

/** Tell WordPress to run mytheme_setup() when the 'after_setup_theme' hook is run. */
add_action('after_setup_theme', 'mytheme_setup');

if (!function_exists('mytheme_setup')):
function mytheme_setup() {
	// This theme uses post thumbnails
	add_theme_support('post-thumbnails');
	
	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');
}
endif;

if ( ! function_exists( 'mytheme_comment' ) ) :
/*
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own mytheme_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since mytheme 2.0
 */
function mytheme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' : ?>
			<li class="li_content_commentbox" id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>">
					<h4>
						<span><?php printf( '%s', get_comment_author_link() ); ?></span>
						<span>于 <?php printf( '%1$s&nbsp;&nbsp;%2$s', get_comment_date(),  get_comment_time() ); ?> 说：</span>
						<span style="float:right">
							<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</span>
					</h4>
					<div class="div_content_commenttext">
						<?php comment_text(); ?>
					</div><!-- END '.div_content_commenttext' -->
				</div>
			<?php
			break;
		case 'pingback'  :
		case 'trackback' : ?>
			<li class="post pingback">
				<p><?php _e( 'Pingback:', 'mytheme' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'mytheme' ), ' ' ); ?></p>
		<?php
		break;
	endswitch;
}
endif;

/*
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override mytheme_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since mytheme 2.0
 * @uses register_sidebar
 */
function mytheme_widgets_init() {
	// Area 1, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => 'First Footer Widget Area',
		'id' => 'first-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="bottom-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="bottom-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 2, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => 'Second Footer Widget Area',
		'id' => 'second-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="bottom-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="bottom-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => 'Third Footer Widget Area',
		'id' => 'third-footer-widget-area',
		'before_widget' => '<div id="%1$s" class="bottom-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="bottom-title">',
		'after_title' => '</h3>',
	) );
}

/** Register sidebars by running mytheme_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'mytheme_widgets_init' );

/*
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using Twenty Ten 1.2 in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default mytheme styling.
 *
 * @since mytheme 2.0
 */
function mytheme_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'mytheme_remove_recent_comments_style' );

if (!function_exists('mytheme_posted_cat')) :
/*
 * 打印当前文章的分类，生成HTML代码
 * @since mytheme 2.0
 */
function mytheme_posted_cat() {
	if (count(get_the_category())) {
		printf('%1$s', get_the_category_list(' '));
	}
}
endif;

if (!function_exists('mytheme_posted_on')) :
/*
 * 打印当前文章的作者及时间，生成HTML代码
 * @since mytheme 2.0
 */
function mytheme_posted_on() {
	printf('<a href="%1$s" title="查看%2$s的所有文章">%2$s</a> 发表于 <a href="%3$s" title="%4$s">%5$s</a>',
		get_author_posts_url(get_the_author_meta('ID')),
		get_the_author(),
		get_permalink(),
		esc_attr( get_the_time()),
		get_the_date()
	);
}
endif;

if (!function_exists('mytheme_posted_in')) :
/*
 * 打印当前文章的分类及标签，生成HTML代码
 * @since mytheme 2.0
 */
function mytheme_posted_in() {
	if (count(get_the_category())) {
		printf('<label>分类：</label>%1$s', get_the_category_list(' '));
	}
	$tag_list = get_the_tag_list('<span name="tags">', '</span> <span name="tags">', '</span>');
	if ($tag_list) {
		printf('<label>标签：</label>%1$s', $tag_list);
	}
}
endif;
?>
