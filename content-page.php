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
	</header>
	<div class="article-content">
		<?php the_content(); ?>
	</div>
	<nav class="pagenav">
		<?php multipagebar(); ?>
	</nav>
</article>
