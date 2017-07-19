<?php
/**
 * Template part for desktop top bar menu
 *
 * @package EliteDigitalBase
 * @since 1.0
 * @author Jay Bauer &lt;jbauer@elitedigital.ca&gt;
 * @copyright Copyright (c) 2017, Elite Digital
 * @link https://www.elitedigitalagency.com
*/
?>

<nav class="site-navigation top-bar" role="navigation">
  <div class="top-bar-right">
    <?php elitedigitalbase_top_bar_r(); ?>
  </div>
  <div class="top-bar-left">
    <div class="site-desktop-title top-bar-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>
  </div>
</nav>
