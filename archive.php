<?php
/**
 * Default template to display archive-like pages.
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

get_header(); ?>

<div class="main-wrap" role="main">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'elitedigitalbase_pagination' ) ) :
			elitedigitalbase_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous">&larr; Older posts</div>
				<div class="post-next">Newer posts &rarr;</div>
			</nav>
		<?php endif; ?>

	</article>
	<?php get_sidebar(); ?>

</div>

<?php get_footer();
