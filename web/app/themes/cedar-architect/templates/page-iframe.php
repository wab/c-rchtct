<?php
/**
 * Template Name: Page iframe
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php if (get_field('iframe_url')) : ?>
    <iframe src="<?php the_field('iframe_url'); ?>" frameborder="0" width="100%" height="800px"></iframe>
  <?php endif;  ?>
<?php endwhile; ?>