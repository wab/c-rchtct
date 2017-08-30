<?php
/**
 * Template Name: Page de fonctionalités
 */

while (have_posts()) : the_post(); ?>

  <?php get_template_part('partials/newsections') ?>

<?php endwhile; ?>
