<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

get_header(); ?>

 <div class="main-wrap" role="main">
	<article>
		<header>
			<h1 class="entry-title">File Not Found</h1>
		</header>
		<div class="entry-content">
			<div class="error">
				<p class="bottom">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
			</div>
			<p>Please try the following:</p>
			<ul>
				<li>Check your spelling</li>
				<li>Return to the <a href="/">home page</a></li>
				<li>Click the <a href="javascript:history.back()">Back</a> button</li>
			</ul>
		</div>
	</article>

 <?php get_sidebar(); ?>

</div>

<?php get_footer();
