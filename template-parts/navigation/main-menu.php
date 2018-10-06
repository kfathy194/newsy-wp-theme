
<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <button id="menu-toggle" class="menu-toggle" hidden>|||</button>

  <div id="site-header-menu" class="site-header-menu">
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
      <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu',
            ) );
        ?>
      </nav><!-- .main-navigation -->
    <?php endif; ?>
  </div><!-- .site-header-menu -->
<?php endif; ?>
<?php get_search_form(); ?>