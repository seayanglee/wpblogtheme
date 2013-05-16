<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<article class="section article">
	<header class="article-header">
		<h2 class="article-title">
			[<?php mytheme_article_category(); ?>]
			<a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
		</h2>
	</header>
	<div class="article-content preview">
		<?php the_content('阅读全文...'); ?>
	</div>
</article>
