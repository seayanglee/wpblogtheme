<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php /* 如果没有可显示的内容，显示一个空档页 */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/* 开始循环显示内容 */
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php /* 文章形式：“相册” */ ?>
	<?php /* How to display posts of the Gallery format. The gallery category is the old way. */ ?>
	<?php if ( ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) || in_category( _x( 'gallery', 'gallery category slug', 'twentyten' ) ) ) : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<div class="entry-meta"><?php twentyten_posted_on(); ?></div><!-- .entry-meta -->
			
			<div class="entry-content">
				<?php if ( post_password_required() ) : ?>
					<?php the_content(); ?>
				<?php else : ?>
					<?php
						$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
						if ( $images ) :
							$total_images = count( $images );
							$image = array_shift( $images );
							$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
					?>
							<div class="gallery-thumb">
								<a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
							</div><!-- .gallery-thumb -->
							<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'twentyten' ), 'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"', number_format_i18n( $total_images ) ); ?></em></p>
						<?php endif; ?>
						<?php the_excerpt(); ?>
				<?php endif; ?>
			</div><!-- .entry-content -->

			<div class="entry-utility">
				<?php if ( function_exists( 'get_post_format' ) && 'gallery' == get_post_format( $post->ID ) ) : ?>
					<a href="<?php echo get_post_format_link( 'gallery' ); ?>" title="<?php esc_attr_e( 'View Galleries', 'twentyten' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a>
					<span class="meta-sep">|</span>
				<?php elseif ( in_category( _x( 'gallery', 'gallery category slug', 'twentyten' ) ) ) : ?>
					<a href="<?php echo get_term_link( _x( 'gallery', 'gallery category slug', 'twentyten' ), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'twentyten' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a>
					<span class="meta-sep">|</span>
				<?php endif; ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- #post-## -->

	<?php /* 文章形式：“日志” */ ?>
	<?php /* How to display posts of the Aside format. The asides category is the old way. */ ?>
	<?php elseif ( ( function_exists( 'get_post_format' ) && 'aside' == get_post_format( $post->ID ) ) || in_category( _x( 'asides', 'asides category slug', 'twentyten' ) )  ) : ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
				<div class="entry-summary"><?php the_excerpt(); ?></div><!-- .entry-summary -->
			
			<?php else : ?>
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
				</div><!-- .entry-content -->
			<?php endif; ?>

			<div class="entry-utility">
				<?php twentyten_posted_on(); ?>
				<span class="meta-sep">|</span>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->
		</div><!-- #post-## -->

	<?php /* 文章形式：“标准” */ ?>
	<?php /* How to display all other posts. */ ?>
	<?php else : ?>
		<div id="post-<?php the_ID(); ?>" class="div_content_post">
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<h3>
				<!-- 文章作者、时间 -->
				<?php twentyten_posted_on(); ?>
				<!-- 文章分类、标签 -->
				<?php twentyten_posted_in(); ?>
				<!-- 编辑超链接 -->
				<?php edit_post_link( '编辑本文', '<span>', '</span>' ); ?>
			</h3>
			<div class="div_content_posttext">
				<?php
				if ( is_archive() || is_search() ) : // Only display excerpts for archives and search.
					the_excerpt();
				else :
					the_content( '阅读全文...' );
				endif;
				?>
			</div>
		</div><!-- END '.div_content_post' -->
	<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>
<?php endwhile; // End the loop. Whew. ?>


<?php /* 显示翻页超链接 */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-below" class="div_content_pagelink1">
		<div style="float:left"><?php previous_posts_link( '<<前一页(更新的内容)' ); ?></div>
		<div style="float:right"><?php next_posts_link( '(更旧的内容)后一页>>' ); ?></div>
	</div><!-- END '.div_content_pagelink1' -->
<?php endif; ?>
