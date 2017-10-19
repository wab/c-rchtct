<?php
  $plugins_url = plugins_url();
  if (pll_current_language() == 'en') {
    $current_flag = $plugins_url . '/polylang/flags/us.png';
  } else {
    $current_flag = $plugins_url . '/polylang/flags/' . pll_current_language() . '.png';
  }
?>

<nav class="main--navigation navigation-desktop show-for-large">
    <ul id="menu-navigation-principale" class="main--navigation--menu show-for-large horizontal menu">
      <!-- fonctionnalités -->
      <?php if (has_nav_menu('features_navigation')) : ?>
      <li class="menu-item menu-parent menu-fonctionnalites">
        <a href="#" data-toggle="menu-features"><?php _e('Features', 'cedar-architect') ?></a>
        <div class="dropdown-pane" id="menu-features" data-dropdown data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true" data-close-on-click="true">
          <?php wp_nav_menu(['theme_location' => 'features_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <!-- pour les pros -->
      <?php if (has_nav_menu('users_navigation')) : ?>
      <li class="menu-item menu-parent menu-users">
        <a href="#" data-toggle="menu-users"><?php _e('For businesses', 'cedar-architect') ?></a>
        <div class="dropdown-pane" id="menu-users" data-dropdown data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true" data-close-on-click="true">
          <?php wp_nav_menu(['theme_location' => 'users_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <!-- démo -->
      <li class="menu-item menu-demo"><a href="http://app.cedar-architect.com/<?php echo pll_current_language(); ?>"><?php _e('Demo', 'cedar-architect') ?></a></li>

      <!-- galerie -->
      <?php if (has_nav_menu('galleries_navigation')) : ?>
      <li class="menu-item menu-parent menu-galeries">
        <a href="#" data-toggle="menu-galleries"><?php _e('Gallery', 'cedar-architect') ?></a>
        <div class="dropdown-pane" id="menu-galleries" data-dropdown data-v-offset="0" data-auto-focus="false" data-hover="true" data-hover-pane="true" data-close-on-click="true">
          <?php wp_nav_menu(['theme_location' => 'galleries_navigation', 'menu_class' => 'submenu', 'depth' => 2]); ?>
        </div>
      </li>
      <?php endif; ?>

      <!-- tarifs -->
      <li class="menu-item menu-tarifs <?php if(is_page(15) || is_page(icl_object_id(15, 'page', false))) {echo 'active'; } ?>"><?php icl_link_to_element(15);  ?></li>

      <!-- support -->
      <li class="menu-item menu-support <?php if(is_page(1024) || is_page(icl_object_id(1024, 'page', false))) {echo 'active'; } ?>"><?php icl_link_to_element(1024);  ?></li>

      <!-- blog -->
      <li class="menu-item menu-blog <?php if(is_home() || is_archive() || is_single() ) {echo 'active'; } ?>"><?php icl_link_to_element(17);  ?></li>

      <!-- application -->
      <li class="menu-item link-login">
        <a data-toggle="menu-login"><?php _e('Application', 'cedar-architect') ?></a>
        <div class="dropdown-pane bottom" id="menu-login" data-dropdown data-hover="true" data-hover-pane="true" data-close-on-click="true" data-v-offset="0">
          <ul class="sub-menu">
            <li class="menu-item">
              <a href="http://app.cedar-architect.com/<?php echo pll_current_language(); ?>/profile"><svg class="icon-power"><use xlink:href="#icon-power"></use></svg><br><?php _e('Log In', 'cedar-architect') ?></a>
            </li>
            <li class="menu-item">
              <a href="http://app.cedar-architect.com/<?php echo pll_current_language(); ?>/register"><svg class="icon-key"><use xlink:href="#icon-key"></use></svg><br><?php _e('Register', 'cedar-architect') ?></a>
            </li>
          </ul>
        </div>
      </li>

      <!-- lang -->
      <li class="menu-item menu-lg">
        <a data-toggle="menu-lg"><img src="<?php echo $current_flag; ?>" alt="<?php echo pll_current_language('name'); ?>"></a>
        <div class="dropdown-pane bottom" id="menu-lg" data-dropdown data-hover="true" data-hover-pane="true" data-close-on-click="true" data-v-offset="0">
          <ul class="sub-menu">
            <?php pll_the_languages(array('dropdown' => '0', 'display_names_as'=> 'name', 'show_flags'=>1,'show_names'=>1, 'hide_current'=> 0));?>
          </ul>
        </div>
      </li>
    </ul>
</nav>
