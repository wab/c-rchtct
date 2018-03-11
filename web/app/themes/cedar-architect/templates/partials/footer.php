<footer class="mainfooter">
  <div class="widget--area">
    <div class="widget">
      <p class="widget--title"><?php bloginfo('title'); ?></p>
      <nav class="nav-footer scrollreveal">
        <ul class="no-bullet nav-footer--menu">
          <li class="nav-footer--item"><svg class="icon icon-info"><use xlink:href="#icon-info"></use></svg><?php icl_link_to_element(262);  ?></li>
          <li class="nav-footer--item"><svg class="icon icon-users"><use xlink:href="#icon-users"></use></svg><?php icl_link_to_element(3178);  ?></li>
          <?php if (pll_current_language() == 'fr') { ?>
            <li class="nav-footer--item"><svg class="icon icon-star"><use xlink:href="#icon-star"></use></svg><?php icl_link_to_element(35);  ?></li>
          <?php  }?>
          <li class="nav-footer--item"><svg class="icon icon-envelop"><use xlink:href="#icon-envelop"></use></svg><?php icl_link_to_element(37);  ?></li>
          <li class="nav-footer--item"><svg class="icon icon-sitemap"><use xlink:href="#icon-sitemap"></use></svg><?php icl_link_to_element(2269);  ?></li>
        </ul>
      </nav>
    </div>

    <div class="widget">
      <p class="widget--title"><?php _e('Follow us', 'cedar-architect'); ?></p>
      <ul class="reseaux--list no-bullet scrollreveal">
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://twitter.com/cedararchitect')"><svg class="icon-twitter"><use xlink:href="#icon-twitter"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://www.facebook.com/cedararchitect.3d')"><svg class="icon-facebook"><use xlink:href="#icon-facebook"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://plus.google.com/+CedarArchitect-3Dsoftware')"><svg class="icon-google-plus"><use xlink:href="#icon-google-plus"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://www.youtube.com/c/CedarArchitect-3Dsoftware')"><svg class="icon-youtube-play"><use xlink:href="#icon-youtube-play"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://www.pinterest.fr/cedararchitect3d')"><svg class="icon-pinterest"><use xlink:href="#icon-pinterest"></use></svg></button></li>
      </ul>
    </div>
  </div>
  <div class="ours text-center">
    <div class="row column">
      <div class="scrollreveal">
       <?php icl_link_to_element(382);  ?> - <?php icl_link_to_element(385);  ?> - &copy; copyright <?php echo date("Y") ?> Cedreo Interactive
      </div>
    </div>
  </div>
</footer>
