<?php
/*
 * @package WordPress
 * @subpackage mytheme
 * @since mytheme 2.1
 */
?>

<article class="section article">
	<header class="article-header">
		<h1 class="article-title"><?php the_title(); ?></h1>
		<section class="article-meta">
			<?php mytheme_article_meta(); ?>
		</section>
	</header>
	<div class="article-content">
		<?php the_content(); ?>
	</div>
	<nav class="pagenav">
		<?php multipagebar(); ?>
	</nav>
	<nav class="article-notice">
		请遵循这份 <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/cn/" target="_blank" title="署名-非商业性使用-相同方式共享">著作权协议</a>
		(Use <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank" title="Attribution-NonCommercial-ShareAlike">License</a>)，
		如需转载请注明来自 <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>">yang仔博客</a>。
	</nav>
</article>
