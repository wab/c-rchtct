<?php
/**
 * Template Name: Page avec sections
 */

while (have_posts()) : the_post(); ?>

  <div class="row">

    <div class="columns large-8 large-centered">
      <div class="page-wrapper">
        <?php get_template_part('partials/content-page'); ?>
      </div>

    </div>


  </div>

  <?php get_template_part('partials/sections') ?>

<?php endwhile; ?>
