<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

if ( ! function_exists( 'elitedigitalbase_sticky_posts' ) ) :
function elitedigitalbase_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','elitedigitalbase_sticky_posts');

endif;
