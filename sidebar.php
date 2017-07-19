<?php
/**
 * The sidebar containing the main widget area
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

?>
<aside class="sidebar">
	<?php do_action( 'elitedigitalbase_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'elitedigitalbase_after_sidebar' ); ?>
</aside>
