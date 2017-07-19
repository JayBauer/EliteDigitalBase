<?php
/**
 * Template part for mobile top bar menu
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/
?>

<div class="site-title-bar title-bar" <?php elitedigitalbase_title_bar_responsive_toggle(); ?>>
  <div class="title-bar-right">
    <button class="menu-icon" type="button" data-toggle="<?php elitedigitalbase_mobile_menu_id(); ?>"></button>
    <span class="site-mobile-title title-bar-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </span>
  </div>
</div>
<nav class="mobile-menu vertical menu" id="<?php elitedigitalbase_mobile_menu_id(); ?>" role="navigation">
  <?php elitedigitalbase_mobile_nav(); ?>
</nav>
