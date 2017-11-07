<?php
/**
 * Template Name: Page tutoriels
 */

?>

<?php while (have_posts()) :
    the_post(); ?>

  <div class="page-wrapper" >
    <div class="page-column page-contenu" id="page-contenu">
        <?php get_template_part('partials/content-page'); ?>
        <?php if (have_rows('tutoriels')) : ?>

            <?php $num = 0; ?>
            <?php while (have_rows('tutoriels')) :
                the_row(); ?>

            <?php
              //vars
              $num = $num + 1;
              $title = get_sub_field('title');
              $pdf = get_sub_field('pdf');
              $shortcode = '[gview file="'. $pdf . '" title="'. $title .'" save="1" cache="1"]';
            ?>
            <section class="tutoriel--container" id="<?php echo $num; ?>" data-magellan-target="<?php echo $num; ?>">
              <h2 class="tutoriel--title"><?php echo $title; ?></h2>
              <div class="tutoriel--contenu">
                <?php echo do_shortcode($shortcode); ?>
              </div>
            </section>
            <?php endwhile; ?>

        <?php endif; ?>

    </div>
    <div class="page-column sidebar" data-sticky-container>
      <nav class="tutoriels--navigation sticky show-for-large" data-sticky data-anchor="page-contenu">
        <h2>Liste des tutoriaux</h2>
        <?php if (have_rows('tutoriels')) : ?>

            <?php $numLink = 0; ?>

        <ul class="tutoriel--navigation--list menu vertical" data-magellan>
            <?php while (have_rows('tutoriels')) :
                the_row(); ?>

            <?php
              //vars
              $title = get_sub_field('title');
              $numLink = $numLink + 1;
            ?>

            <li class="tutoriel--navigation--item"><a class="tutoriel--navigation--link" href="#<?php echo $numLink; ?>"><?php echo $title; ?></a></li>

            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </nav>
    </div>

  </div>

<?php endwhile; ?>
