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

  <?php if( have_rows('section') ): ?>

  <?php while( have_rows('section') ): the_row();

    // vars
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $title = get_sub_field('title');

    ?>

    <div class="section">
      <div class="row">
        <div class="columns large-10 large-centered">
          <h2 class="page-section--title"><span><?php echo $title; ?></span></h2>
          <?php if( !empty($image) ) : ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="main-image" />
          <?php endif; ?>
          <?php echo $content; ?>
        </div>
      </div>
    </div>

  <?php endwhile; ?>

<?php endif; ?>

<?php endwhile; ?>
