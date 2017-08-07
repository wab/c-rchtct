<?php
  $title = get_sub_field('title');
  $image = get_sub_field('thumb');
  $url = get_sub_field('url');
?>

<div <?php post_class('gallery--item'); ?>>
  <article class="gallery--item--wrapper">
    <img class="gallery--item--thumb" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
    <button class="gallery--item--overlay" data-iframe="true" data-src="<?php echo $url; ?>" data-facebook-share-url="<?php echo $url; ?>" data-twitter-share-url="<?php echo $url; ?>" data-googleplus-share-url="<?php echo $url; ?>" data-pinterest-share-url="<?php echo $url; ?>">
      <div class="gallery--item--overlay--container text-center">
          <h2 class="gallery--item--overlay--title"><?php echo $title; ?></h2>
          <span class="gallery--item--button"><svg class="icon-search"><use xlink:href="#icon-search"></use></svg></span>
      </div>
    </button>
  </article>
</div>
