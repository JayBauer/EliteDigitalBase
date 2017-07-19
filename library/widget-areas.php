<?php
/**
 * Register widget areas
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

if ( ! function_exists( 'elitedigitalbase_sidebar_widgets' ) ) :
function elitedigitalbase_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => 'Sidebar widgets',
		'description' => 'Drag widgets to this sidebar container.',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-widgets',
		'name' => 'Footer widgets',
		'description' => 'Drag widgets to this footer container',
		'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'elitedigitalbase_sidebar_widgets' );
endif;
