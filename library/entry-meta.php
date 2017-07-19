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

if ( ! function_exists( 'elitedigitalbase_entry_meta' ) ) :
	function elitedigitalbase_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( 'Posted on %1$s at %2$s.', get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">Written by <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
endif;
