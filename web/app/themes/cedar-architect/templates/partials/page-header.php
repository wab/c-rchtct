<?php if (is_front_page()) : ?>
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="maintitle page--title"><?php the_field('main-title'); ?></h1>
        <?php if (get_field('cta_link')) : ?>
        <a href="<?php the_field('cta_link'); ?>" class="button large focus"><?php if (get_field('cta_intitule')) {
            the_field('cta_intitule');
} else {
    echo 'Créer mon projet' ;
} ?></a>
        <?php endif; ?>
    </div>
  </header>

<?php elseif (is_single()) : ?>
   <div class="page-header text-center banner">
    <div class="wrapper">
      <p class="page--title">Blog</p>
    </div>
  </div>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if (function_exists('bcn_display')) :?>
    <div class="row column">
        <?php bcn_display(); ?>
    </div>
    <?php endif; ?>
  </div>
<?php else :
    $banner = get_field('header-img');
    if (!empty($banner)) {
        $bannerUrl = $banner['url'];
    }  ?>
  <header class="page-header text-center banner" <?php if (get_field('header-img')) {
        echo "style='background-image: url(". $bannerUrl .")'";
} ?>>
    <div class="wrapper">
      <h1 class="page--title"><?= App\title(); ?></h1>
    </div>
  </header>
    <?php if (!is_page_template('templates/page-iframe.php') && !is_page_template('templates/page-feature.php')) : ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if (function_exists('bcn_display')) :?>
      <div class="row column">
        <?php bcn_display(); ?>
      </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>

