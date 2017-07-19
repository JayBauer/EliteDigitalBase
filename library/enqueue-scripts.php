<?php
/**
 * Enqueue all scripts
 *
 * @package EliteDigitalBase
 * @subpackage Library
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

if ( ! function_exists( 'elitedigitalbase_scripts' ) ) :
	function elitedigitalbase_scripts() {
		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/stylesheets/foundation.css', array(), '2.9.2', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

		// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/javascript/foundation.js', array('jquery'), '2.9.2', true );

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	add_action( 'wp_enqueue_scripts', 'elitedigitalbase_scripts' );
endif;
