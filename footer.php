<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/

?>

<div class="footer-container" data-sticky-footer>
	<footer id="footer" class="row expanded footer">
		<?php do_action( 'elitedigitalbase_before_footer' ); ?>

		<div class="row">
		</div>

		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'elitedigitalbase_after_footer' ); ?>
	</footer>
</div>

<?php do_action( 'elitedigitalbase_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div>
	</div>
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'elitedigitalbase_before_closing_body' ); ?>
</body>
</html>
