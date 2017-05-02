<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('partials/head'); ?>
  <body <?php body_class(); ?>>
    <?php do_action('get_header'); ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHRJPQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Google Tag Manager DataLayers -->
    <script type="text/javascript">
    /* global dataLayer */
    /* eslint-disable */
      dataLayer.push({
        'contentGroup1': '<?php echo $post->post_title ?>',
        'userType': '[valeur]',
      });
    </script>

    <div class="wrap">
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <?php get_template_part('partials/header'); ?>

      <?php get_template_part('partials/page-header'); ?>
      <div class="container" role="document">
        <main class="main">
          <?php include App\template()->main(); ?>
        </main>
        <?php if (App\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php App\template_part('partials/sidebar'); ?>
          </aside>
        <?php endif; ?>
      </div>
      <?php
        do_action('get_footer');
        get_template_part('partials/footer');
        get_template_part('partials/icons');
        get_template_part('partials/olark');
        wp_footer();
      ?>
    </div>
  </body>
</html>
